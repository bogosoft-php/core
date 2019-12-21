<?php

namespace Bogosoft\Core;

use RuntimeException;

/**
 * An exception intended to be thrown when a supplied argument is {@see null}
 * but should not be.
 *
 * @package Bogosoft\Core
 */
class ArgumentNullException extends RuntimeException
{
    /**
     * Create a new NULL argument exception.
     *
     * @param string|null $argname The name of the argument receiving a null value. If this
     *                             parameter is not supplied, this exception will have no
     *                             message.
     */
    function __construct(?string $argname = null)
    {
        if (null !== $argname)
        {
            $message = sprintf(ExceptionMessage::NULL_ARG, $argname);

            parent::__construct($message);
        }
    }
}