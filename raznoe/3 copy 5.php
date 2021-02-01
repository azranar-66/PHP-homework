<?php

$many = 100;
$month = 12;
$persent = 1.5;
$s = $many;

for ($i = 1; $i <= $month; $i++) {
    $s = $s + ($s / 100 * $persent);
}
echo round($s, 2);
