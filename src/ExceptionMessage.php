<?php

namespace Bogosoft\Core;

/**
 * Contains a set of constants for exception message templates.
 *
 * @internal
 * @package Bogosoft\Core
 */
final class ExceptionMessage
{
    /**
     * Get a message template for a NULL argument exception.
     */
    const NULL_ARG = 'An unexpected NULL value was supplied for argument, \'%s\'.';

    /**
     * Get a message template for an invalid type substitution message.
     */
    const TYPE_SUBSTITUTION = 'Invalid type substitution: expected type, \'%s\'; got type, \'%s\'.';
}