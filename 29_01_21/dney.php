<?php
$now = time(); 
$date = strtotime("1991-4-19"); 
$datediff = $now - $date; 

echo floor($datediff / (60 * 60 * 24));