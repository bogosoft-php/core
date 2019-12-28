<?php

declare(strict_types=1);

use Bogosoft\Core\FormatException;
use PHPUnit\Framework\TestCase;

class FormatExceptionTest extends TestCase
{
    function testCanInstantiate(): void
    {
        $expected = 'Hello, World!';

        $exception = new FormatException($expected);

        $this->assertInstanceOf(FormatException::class, $exception);

        $this->assertEquals($expected, $exception->getMessage());
    }

    function testCanThrow(): void
    {
        $this->expectException(FormatException::class);

        throw new FormatException();
    }
}