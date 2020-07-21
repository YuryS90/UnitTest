<?php

namespace App;

class Сonversion
{
    function convAge(int $days) : float
    {
        $age = $days / 365;

        if ($age <= 0 || $age > 150) {
            throw new \Exception('Таких людей не бывает, возраст = ' . $age);
        } else {
            return $age;
        }
    }
}
