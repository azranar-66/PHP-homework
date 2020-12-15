<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
for ($s = $a; $s <= $b; $s += $c) {
    echo $s. "<br>";
}
