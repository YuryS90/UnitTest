<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Str;

class ConverterTest extends TestCase
{
    function testComparel(): void
    {
        $str = new Str();
        $this->assertEquals(
            true,
            $str->comparel("ab", "ab")
        );

        $this->assertEquals(
            false,
            $str->comparel("abc", "ab")
        );

        $this->assertIsBool(
            $str->comparel("ab", "abc")
        );

    }


    function testLen(): void
    {
        $str = new Str();

        $this->assertEquals(
            5,
            $str->len("Hello")
        );

        $this->assertEquals(
            6,
            $str->len("Привет")
        );

    }

}