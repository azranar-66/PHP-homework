<?php

$a = $_POST["z1"];

$numbers = [
    0 => "zero",
    1 => "one",
    2 => "two",
    3 => "three",
    4 => "four",
    5 => "five",
    6 => " six",
    7 => "seven",
    8 => "eight",
    9 => "nine"
];

$strNum = str_split($a);

$str = "";

foreach ($strNum as  $value) {

    $str .= ' ' . $numbers[$value];
}
echo $str;
