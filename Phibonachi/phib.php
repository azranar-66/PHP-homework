<?php

$counts = $_POST["count"];
$f20 = 0;
$f21 = 1;
echo "<br>С использованием цика WHILE:<br>";


echo $f20 . "<br>";
echo $f21 . "<br>";
$i = 0;
while ($i2 <= $counts - 3) {
    $results = $f20 + $f21;
    echo $results . "<br>";
    $f20 = $f21;
    $f21 = $results;
    $i2++;
}

$countsi = $_POST["count"];
$f10 = 0;
$f11 = 1;
echo " С использованием цика FOR:<br>";


echo $f10 . "<br>";
echo $f11 . "<br>";
for ($i1 = 0; $i1 <= $countsi - 3; $i1++) {
    $resultsi = $f10 + $f11;
    echo $resultsi . "<br>";
    $f10 = $f11;
    $f11 = $resultsi;
}

$countz = $_POST["count"];
$f30 = 0;
$f31 = 1;
echo "<br>С использованием цика DO WHILE:<br>";


echo $f30 . "<br>";
echo $f31 . "<br>";
do {
    $resultz = $f30 + $f31;
    echo $resultz . "<br>";
    $f30 = $f31;
    $f31 = $resultz;
    $i3++;
} while ($i3 <= $countz - 3);
