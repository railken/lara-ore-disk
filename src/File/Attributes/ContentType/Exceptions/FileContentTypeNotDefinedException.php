<?php

namespace Railken\LaraOre\Storage\File\Attributes\ContentType\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileContentTypeNotDefinedException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'content_type';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_CONTENT_TYPE_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
