<?php

include "../vendor/autoload.php";

// use App\Str;
use App\Сonversion;

// $result = new Str();

// echo ($result->comparel("a", "a")) * 1;

// echo "<br>";



$age = new Сonversion();

try {
    // echo $age->convAge(160*365);
    echo $age->convAge(3000);
} catch (Exception $e) {
    echo " Ошибка: ", $e->getMessage(), "\n";
}
