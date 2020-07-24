<?php

namespace App;

class ArrayCacl
{

    /**
     * 	Сумма элементов массива
     * @var array<Foo>
     */
    public function arraySum(array $array) : float
    {
        return array_sum($array);
    }

    /**
     * 	Произведение элементов массива
     */
    public function arrayMult(array $array) : float
    {
        return array_product($array);
    }

    /**
     * 	Умножение массива на число
     */
    public function arrayMultNum(array $array, int $number): array
    {
        foreach ($array as &$value) {
            if (is_numeric($value)) {
                $value = $value * $number;
            }
        }

        return $array;
    }
}
