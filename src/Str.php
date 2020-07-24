<?php

namespace App;

class Str
{
    public function comparel(string $str1, string $str2) : bool
    {
        return $str1 === $str2;
    }

    public function len(string $str) : int
    {
        return iconv_strlen($str);
    }
}