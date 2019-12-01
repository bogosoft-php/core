<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Bogosoft\Core\InvalidOperationException;
use PHPUnit\Framework\TestCase;

final class InvalidOperationExceptionTest extends TestCase
{
    public function testCanInstantiate() : void
    {
        $exception = new InvalidOperationException();

        $this->assertInstanceOf(InvalidOperationException::class, $exception);
    }

    public function testCanThrow() : void
    {
        $this->expectException(InvalidOperationException::class);

        throw new InvalidOperationException();
    }
}
