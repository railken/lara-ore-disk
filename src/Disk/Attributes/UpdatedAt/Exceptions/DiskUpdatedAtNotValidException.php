<?php

namespace Railken\LaraOre\Storage\Disk\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Storage\Disk\Exceptions\DiskAttributeException;

class DiskUpdatedAtNotValidException extends DiskAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'DISK_UPDATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
