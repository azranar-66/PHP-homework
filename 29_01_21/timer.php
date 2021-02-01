<?php


$alimp = mktime(21, 10, 0, 7, 23, 2021);
$now = time();
$seconds = $alimp - $now;
define('SECONDS_PER_MINUTE', 60);
define('SECONDS_PER_HOUR', 3600);
define('SECONDS_PER_DAY', 86400);
$days = floor($seconds / SECONDS_PER_DAY);
$seconds -= ($days * SECONDS_PER_DAY);
$hours = floor($seconds / SECONDS_PER_HOUR);
$seconds -= ($hours * SECONDS_PER_HOUR);
$minutes = floor($seconds / SECONDS_PER_MINUTE);
$seconds -= ($minutes * SECONDS_PER_MINUTE);
echo ("<h3>До начала олимпиады осталось:$days дней, $hours часов, $minutes минут, $seconds секунда</h3>");
