<?php

namespace Railken\LaraOre\Storage\Disk\Attributes\Driver\Exceptions;

use Railken\LaraOre\Storage\Disk\Exceptions\DiskAttributeException;

class DiskDriverNotValidException extends DiskAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'driver';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'DISK_DRIVER_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
