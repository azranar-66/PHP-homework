<?php
$part1 = $_POST["part1"];
$part2 = $_POST["part2"];

if (is_file($part1)){
    rename($part1,$part2);
}
else{
    echo "This not file";
}

