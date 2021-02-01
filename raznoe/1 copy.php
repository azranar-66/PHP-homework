<?php
$a = 100;

$b = $a * 2.5334;
echo $b;

$countDoll = 300;

if ($countDoll < 100) {
    $result = $countDoll * 2.53;
} elseif ($countDoll >= 100 || $countDoll < 10000) {
    $result = $countDoll * 2.531;
} else {
    $result = $countDoll * 2.532;
}
echo "Для покупки " . $countDoll . "$ - Вам необходимо предоставить " . $result . " рублей";
