<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testSum()
    {
        $calc = new Calculator();

        $this->assertIsInt(
            $calc->sum(1, 2)
        );

        $this->assertEquals(
            7,
            $calc->sum(4, 3)
        );
    }


    public function testMul()
    {
        $calc = new Calculator();

        $this->assertIsInt(
            $calc->mul(1, 2)
        );

        $this->assertEquals(
            12,
            $calc->mul(4, 3)
        );
    }


    public function testDiv()
    {
        $calc = new Calculator();

        $this->assertIsFloat(
            $calc->div(1, 2)
        );

        $this->assertEquals(
            2,
            $calc->div(4, 2)
        );
    }


    public function testDif()
    {
        $calc = new Calculator();

        $this->assertIsInt(
            $calc->dif(1, 2)
        );

        $this->assertEquals(
            3,
            $calc->dif(5, 2)
        );
    }
}
