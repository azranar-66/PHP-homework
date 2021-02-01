<?php

$x = 2;

if ($x > 2){
    $Y=sqrt($x);
} else {
    $y = $x ** 2;
}

echo $y;

$x = 4;
if ($x <= 3){
    $y = $x ** 2;
} elseif (3 < $x || $x <= 5){
    $y = $x + 5;
} else {
    $y = sqrt($x);
} 
echo $y;