<?php

$number =$_POST["z1"];

switch ($number) {
    case "zero":
        $str = 'ноль';
        break;

    case "one":
        $str = 'один';
        break;

    case "two":
        $str = 'два';
        break;

    case "three":
        $str = 'три';
        break;

    case "four":
        $str = 'четыре';
        break;

    case "five":
        $str = 'пять';
        break;

    default:
        $str = "нет такого числа";
        break;
}

echo $str;
