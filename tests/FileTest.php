<?php

namespace Railken\LaraOre\Storage\Tests;

use Railken\Bag;
use Railken\LaraOre\Storage\File\FileManager;
use Railken\LaraOre\Storage\Disk\DiskManager;

/**
 * Testing File
 * Attributes to fill are: disk_id,type,path,status,checksum,permission,access
 */
class FileTest extends BaseTest
{
    use Traits\CommonTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new FileManager();
    }

    /**
     * Retrieve correct bag of parameters.
     *
     * @return Bag
     */
    public function getParameters()
    {
        $bag = new bag();
        $bag->set('content', 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==');
        $bag->set('type', 'uhm');
        $bag->set('access', 'private');

        $bag->set('disk', (new DiskManager())->create($this->getDiskParameters('s3'))->getResource());

        return $bag;
    }

    /**
     * Retrieve correct bag of parameters.
     *
     * @return Bag
     */
    public function getDiskParameters($driver = "s3")
    {
        $drivers = [
            'local' => [
                'url'           => 'http://localhost:8000',
                'visibility'    => 'public',
                'root'          => 'var/cache',
            ],
            's3' => [
                'key'           => env('TEST_DISK_DRIVER_S3_KEY'),
                'secret'        => env('TEST_DISK_DRIVER_S3_SECRET'),
                'bucket'        => env('TEST_DISK_DRIVER_S3_BUCKET'),
                'region'        => env('TEST_DISK_DRIVER_S3_REGION'),
                'url'           => env('TEST_DISK_DRIVER_S3_URL'),

            ],

        ];

        $bag = new Bag();
        $bag->set('driver', $driver);
        $bag->set('name', 'NAME-' . microtime(true));
        $bag->set('enabled', 1);
        $bag->set('config', $drivers[$driver]);

        return $bag;
    }

    public function testSuccessCommon()
    {
        $this->commonTest(new FileManager(), $this->getParameters());
    }

    public function upload($driver, $access)
    {
        $result = (new DiskManager())->create($this->getDiskParameters($driver));
        $this->assertEquals(true, $result->ok());

        $resource = $result->getResource();

        $manager = $this->getManager();

        $result = (new FileManager())->create(
            $this->getParameters()
            ->set('access', $access)
        );

        $this->assertEquals(true, $result->ok());

        $resource = $result->getResource();

        if ($driver !== 'local') {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', $resource->getReadable());
            $this->assertEquals(200, $response->getStatusCode());
        }
    }

    public function testUpload()
    {
        $this->upload('s3', 'private');
        $this->upload('local', 'public');
    }
}
