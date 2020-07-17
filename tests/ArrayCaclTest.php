<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\ArrayCacl;

class ArrayCaclTest extends TestCase
{
    public function testArraySum()
    {
        $array = new ArrayCacl();

        $this->assertIsInt(
            $array->arraySum([1,2,3,4])
        );
    }


    public function testArrayMult()
    {
        $array = new ArrayCacl();

        $this->assertIsInt(
            $array->arrayMult([1,2,3,4])
        );

        $this->assertEquals(
            6,
            $array->arrayMult([1,2,3])
        );
    }


    public function testArrayMultNum()
    {
        $array = new ArrayCacl();

        $this->assertEquals(
            [4,8,12,16],
            $array->arrayMultNum([1,2,3,4], 4)
        );
    }
}
