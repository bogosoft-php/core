<?php

declare(strict_types=1);

use Bogosoft\Core\NotImplementedException;
use PHPUnit\Framework\TestCase;

final class NotImplementedExceptionTest extends TestCase
{
    public function testCanInstantiate() : void
    {
        $exception = new NotImplementedException();

        $this->assertInstanceOf(NotImplementedException::class, $exception);
    }

    public function testCanThrow() : void
    {
        $this->expectException(NotImplementedException::class);

        throw new NotImplementedException();
    }
}
