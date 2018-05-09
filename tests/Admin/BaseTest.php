<?php

namespace Railken\LaraOre\Storage\Tests\Admin;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\Exceptions\Handler as BaseHandler;


abstract class BaseTest extends \Orchestra\Testbench\TestCase
{ 

    protected function getPackageAliases($app)
    {
        return [
            'Twig' => \TwigBridge\Facade\Twig::class,
        ];
    }

    protected function getPackageProviders($app)
    {
        return [
            \Laravel\Passport\PassportServiceProvider::class,
            \Railken\LaraOre\Storage\StorageServiceProvider::class,
            \Railken\Laravel\Manager\ManagerServiceProvider::class,
            \Railken\Laravel\App\AppServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__.'/../..', '.env');
        $dotenv->load();

        parent::setUp();

        $this->artisan('migrate:fresh');
        $this->artisan('migrate');
    }
}
