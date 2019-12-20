<?php

declare(strict_types=1);

use Bogosoft\Core\NotSupportedException;
use PHPUnit\Framework\TestCase;

final class NotSupportedExceptionTest extends TestCase
{
    public function testCanInstantiate() : void
    {
        $exception = new NotSupportedException();

        $this->assertInstanceOf(NotSupportedException::class, $exception);
    }

    public function testCanThrow() : void
    {
        $this->expectException(NotSupportedException::class);

        throw new NotSupportedException();
    }
}
