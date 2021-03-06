<?php

namespace Railken\LaraOre\Storage\Disk\Attributes\Id\Exceptions;

use Railken\LaraOre\Storage\Disk\Exceptions\DiskAttributeException;

class DiskIdNotUniqueException extends DiskAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'DISK_ID_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
