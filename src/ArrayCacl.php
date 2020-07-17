<?php

namespace App;

class ArrayCacl
{

    /**
     * 	Сумма элементов массива
     */
    public function arraySum(array $array)
    {
        return array_sum($array);
    }

    /**
     * 	Произведение элементов массива
     */
    public function arrayMult(array $array)
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
