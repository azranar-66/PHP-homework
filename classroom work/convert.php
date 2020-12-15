<?php


$val1 = $_POST["val1"];
echo "Dollars" . round($val1 / 2.60, 2) . "<br>";
echo "Euro" . round($val1 / 3.15, 2) . "<br>";
echo "Rub" . round($val1 / 0.0914, 2) . "<br>";
