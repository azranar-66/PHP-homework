<?php

$arr = explode(':', file_get_contents('file.txt'));
$arr[2]++;
print_r($arr);
file_put_contents('file.txt', implode(':', $arr));
