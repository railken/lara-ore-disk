<?php

namespace Railken\LaraOre\Storage\File;

use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        File::observe(FileObserver::class);
    }
}
