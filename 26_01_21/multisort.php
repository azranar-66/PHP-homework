<pre>
<?php
$arr1 = [4, 1, 2, 5, 3];
$arr2 = ["четыре", "один", "два", "пять", "три"];
array_multisort($arr1, $arr2);
print_r($arr1);
/*Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)*/
print_r($arr2);
/*Array
(
    [0] => один
    [1] => два
    [2] => три
    [3] => четыре
    [4] => пять
)*/
?>
</pre>