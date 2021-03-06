<?php

namespace Railken\LaraOre\Storage\File\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileUpdatedAtNotDefinedException extends FileAttributeException
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
    protected $code = 'FILE_UPDATED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
