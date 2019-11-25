<?php

declare(strict_types=1);

namespace Bogosoft\Core;

/**
 * An exception intended to be thrown when a function, method, module, etc. has not been
 * implemented but MAY be implemented in a future version.
 */
class NotImplementedException extends \RuntimeException
{
}
