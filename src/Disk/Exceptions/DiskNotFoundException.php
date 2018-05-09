<?php

namespace Railken\LaraOre\Storage\Disk\Exceptions;

class DiskNotFoundException extends DiskException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'DISK_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
