<?php

namespace Railken\LaraOre\Storage\File\Attributes\Id\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileIdNotValidException extends FileAttributeException
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
    protected $code = 'FILE_ID_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
