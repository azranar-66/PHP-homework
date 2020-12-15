<?php

$a = $_POST["a"];
$b = 0;
$c = 1;
while ($c <= $a) {
    $b = $b = $c;
    $c++;
}
echo $b;
