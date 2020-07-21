<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Сonversion;

class СonversionTest extends TestCase
{
    public function testСonversion()
    {
        $age = new Сonversion();

        // $this->expectExceptionCode(
        //     $age->convAge(160*365)
        // );

        $this->assertSame(
            160,
            $age->convAge(160*365)
        );
    }
}
