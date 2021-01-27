<?php
$number = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять", "десять", "одиннадцать", "двенадцать"];

$y = str_replace(" ", "", $_POST["x"]); 

$arr = str_split($y); 

$plus = array_search("+", $arr); 

$x = substr($y, 0, $plus); 

$z = substr($y, $plus + 1, strlen($y));

$v = array_search($z, $number);

$x = array_search($x, $number);

$sum = $x + $v;

echo $y . " = " . $number[$sum];
