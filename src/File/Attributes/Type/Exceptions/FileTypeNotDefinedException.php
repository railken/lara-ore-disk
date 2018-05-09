<?php

namespace Railken\LaraOre\Storage\File\Attributes\Type\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileTypeNotDefinedException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'type';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_TYPE_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
