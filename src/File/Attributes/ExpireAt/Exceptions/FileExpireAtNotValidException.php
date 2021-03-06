<?php

namespace Railken\LaraOre\Storage\File\Attributes\ExpireAt\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileExpireAtNotValidException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'expire_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_EXPIRE_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
