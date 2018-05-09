# lara-ore-storage

[![Build Status](https://travis-ci.org/railken/lara-ore-storage.svg?branch=master)](https://travis-ci.org/railken/lara-ore-storage)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

# Requirements

PHP 7.0.0 and later.

## Composer

You can install it via [Composer](https://getcomposer.org/) by typing the
following command:

```bash
composer require railken/lara-ore-storage
```

## Usage

```php
use Railken\LaraOre\Storage\Disk\DiskManager;
use Railken\LaraOre\Storage\File\FileManager;


$dm = new DiskManager();
$result = $dm->create([
    'name' => 'My storage',
    'driver' => 's3',
    'config' => [
        'key' => '...',
        'secret' => '...'
        'bucket' => '...'
        'region' => '...'
        'url' => '...'
    ]
    'enabled' => 1
]);

if (!$result->ok()) {
    print_r($result->getSimpleErrors());
}

$disk = $resource->getResource();


$fm = new FileManager();
$result = $fm->create([
    'disk' => $disk,
    'access' => 'private',
    'content' => 'iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=='
]);

if ($result->ok()) {

    echo $result->getResource()->getReadable(); // http://s3....

}

```