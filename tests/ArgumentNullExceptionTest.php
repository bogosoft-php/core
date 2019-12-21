<?php

declare(strict_types=1);

use Bogosoft\Core\ArgumentNullException;
use PHPUnit\Framework\TestCase;

class ArgumentNullExceptionTest extends TestCase
{
    function testCanInstantiate(): void
    {
        $exception = new ArgumentNullException();

        $this->assertInstanceOf(ArgumentNullException::class, $exception);
    }

    function testHasMessageWhenArgumentNameSupplied(): void
    {
        $parameter_name = 'param';
        $exception      = new ArgumentNullException($parameter_name);
        $expected       = sprintf(\Bogosoft\Core\ExceptionMessage::NULL_ARG, $parameter_name);
        $actual         = $exception->getMessage();

        $this->assertEquals($expected, $actual);
    }

    function testHasNoMessageWhenArgumentNameIsNotSupplied(): void
    {
        $exception = new ArgumentNullException();

        $this->assertEmpty($exception->getMessage());
    }
}