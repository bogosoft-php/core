<?php

declare(strict_types=1);

namespace Bogosoft\Core;

use RuntimeException;

/**
 * An exception intended to be thrown when an invalid type substitution has occurred.
 *
 * @package Bogosoft\Core
 */
class InvalidTypeSubstitutionException extends RuntimeException
{
    /**
     * Create a new invalid type substitution exception.
     *
     * @param string $expectedType The expected type.
     * @param string $actualType   The actual type.
     */
    function __construct(string $expectedType, string $actualType)
    {
        $message = sprintf(ExceptionMessage::TYPE_SUBSTITUTION, $expectedType, $actualType);

        parent::__construct($message);
    }
}