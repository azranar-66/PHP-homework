<?php


$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
if ($x>$y){
    $buf=$x;
}
else{
    $buf=$y;
}
if($buf>$z){
    $max=$buf;
}
else{
    $max=$z;
}
echo $max;