<?php

function max2($a, $b)
{
  return  $a < $b ? $a : $b;

    // if ($a < $b) {
    //     $res = $a;
    // } else {
    //     $res = $b;
    // }
     
}
$a = 5;
$b = 1;
$c = 3;
$d = 6;
$w = 46;
$e = 7;
echo max2(max2(max2(max2(max2($a, $b), $c), $d), $w), $e);
