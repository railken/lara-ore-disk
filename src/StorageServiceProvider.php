<?php

namespace Railken\LaraOre\Storage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Laravel\Passport\RouteRegistrar;

class StorageServiceProvider extends ServiceProvider
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    public $app;

    /**
     * Current version.
     *
     * @var string
     */
    public $version;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
    
        $this->loadMigrationsFrom(__DIR__.'/Resources/Migrations');

        if (Schema::hasTable('disks')) {
            $disks = (new \Railken\LaraOre\Storage\Disk\DiskManager())->getRepository()->newQuery()->get();

            foreach ($disks as $disk) {
                $disk->reloadConfig();
            }
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
