<?php


$money = 5000;
$percent = 3.5;
$month = 6;
$sum = $money;
$h = 1;
for ($h = 1; $h <= $month; $h++) {
    $sum = $sum + ($sum * ($percent / 100) / 12);
}


echo ' Вклад  ' . $money . ' Рублей, под ' . $percent . ' процента. Через пол года составит - '
    . round($sum, 4) . ' рублей.<br>';

echo '<br>';

$number = 10;
$x = 1;
$y = 1;
$z = 1;

for ($x = 1; $x <= $number; $x++) {
    echo $x . '<br>';
}
echo '<br>';

while ($y <= $number) {
    echo $y . '<br>';
    $y += 1;
}
echo '<br>';

do {
    echo $z . '<br>';
    $z += 1;
} while ($z <= $number);
