
<?php
$x = 1000;

if ($x < 100) {
    $y = $x * 2.53;
} else {
    if ($x >= 100) {
        $y = $x * 2.531;
    } else {
        $y = $x * 2.532;
    }
}
echo $y;
