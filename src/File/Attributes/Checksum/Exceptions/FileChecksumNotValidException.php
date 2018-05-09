<?php

namespace Railken\LaraOre\Storage\File\Attributes\Checksum\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileChecksumNotValidException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'checksum';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_CHECKSUM_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
