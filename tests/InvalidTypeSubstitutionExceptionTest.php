<?php

declare(strict_types=1);

use Bogosoft\Core\ExceptionMessage;
use Bogosoft\Core\InvalidTypeSubstitutionException;
use PHPUnit\Framework\TestCase;

class InvalidTypeSubstitutionExceptionTest extends TestCase
{
    function testCanInstantiate() : void
    {
        $exception = new InvalidTypeSubstitutionException('', '');

        $this->assertInstanceOf(InvalidTypeSubstitutionException::class, $exception);
    }

    function testCanThrow() : void
    {
        $this->expectException(InvalidTypeSubstitutionException::class);

        throw new InvalidTypeSubstitutionException('', '');
    }

    function testReturnsMessageShowingExpectedAndActualTypes() : void
    {
        $actualType = 'Mineral';
        $expectType = 'Animal';

        try
        {
            throw new InvalidTypeSubstitutionException($expectType, $actualType);
        }
        catch (InvalidTypeSubstitutionException $e)
        {
            $expected = sprintf(ExceptionMessage::TYPE_SUBSTITUTION, $expectType, $actualType);

            $this->assertEquals($expected, $e->getMessage());
        }
    }
}