<?php

namespace Railken\LaraOre\Storage\Disk\Attributes\Name\Exceptions;

use Railken\LaraOre\Storage\Disk\Exceptions\DiskAttributeException;

class DiskNameNotDefinedException extends DiskAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'DISK_NAME_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
