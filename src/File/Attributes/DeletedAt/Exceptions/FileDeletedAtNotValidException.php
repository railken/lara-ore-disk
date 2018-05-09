<?php

namespace Railken\LaraOre\Storage\File\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileDeletedAtNotValidException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_DELETED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
