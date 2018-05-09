<?php

namespace Railken\LaraOre\Storage\Tests;

use Railken\Bag;
use Railken\LaraOre\Storage\Disk\DiskManager;

/**
 * Testing disk
 * Attributes to fill are: name, driver, enabled, config.
 */
class DiskTest extends BaseTest
{
    use Traits\CommonTrait;
    
    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new DiskManager();
    }

    /**
     * Retrieve correct bag of parameters.
     *
     * @return Bag
     */
    public function getParameters($driver = "s3")
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

        $bag = new bag();
        $bag->set('driver', $driver);
        $bag->set('name', 'a common name');
        $bag->set('enabled', 1);
        $bag->set('config', $drivers[$driver]);

        return $bag;
    }

    public function testSuccessCommon()
    {
        $this->commonTest(new DiskManager(), $this->getParameters());
    }


}
