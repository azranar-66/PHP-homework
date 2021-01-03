<?php
// // не верно
// echo 2 < 1 ? "Верно" : "Не верно";

// // не верно
// if (2 < 1) {
//     echo "Верно";
// } else {
//     echo "Не верно";
// }
// $arr = array("somearray"=>array(6=>5,13=>9,"a"=>42));
// echo $arr["somearray"] [6]; //5
// echo $arr["somearray"] [13]; //9
// echo $arr["somearray"] ["a"]; //13



// // //'этот массив эквивалентен
// // array (5=>43,32,56,"b"=>12);
// // //этому массиву
// // array (5=>43,6=>32,7=>56,"b"=>12);
// $arr2 = [5 => 43, 32, 56, "b" => 12];
// $arr3 = [5 => 43, 6 => 32, 7 => 56, "b" => 12];
// echo "<pre>";
// print_r($arr2);
// echo "</pre>";
// echo "<pre>";
// print_r($arr3);
// echo "</pre>";


// $arr = array(5=>1,12=>2);
// $arr[]=56;

// $arr = array(5=>1,12=>2);
// $arr["x"]=42;

// $arr = array(5=>1,12=>2);
// unset($arr[5]);

// $arr = array(5=>1,12=>2);
// unset($arr);


// $a=5
// if ($a == 5) :
//     echo "a equals 5";
//     echo "...";

// elseif ($a == 6) :
//     echo "a equals 6";
//     echo "!!!";

// else :
//     echo "a is neither 5 nor 6";
// endif;

// //пример 1
// $i = 1;
// while ($i <= 10) {
//     echo "<pre>";
//     echo $i++;
//     echo "<pre>";
// }

// //пример 2
// $i = 1;
// while ($i <= 10) :
//     echo "<pre>";
//     echo $i;
//     echo "<pre>";
//     $i++;
// endwhile;


// $i = 0;
// do {
//     echo $i;
// } while ($i > 0);

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
// }

// for ($i = 1;; $i++) {
//     if ($i > 10) {
//         break;
//     }
//     echo $i;
// }

// $i = 1;
// for (;;) {
//     if ($i > 10) {
//         break;
//     }
//     echo $i;
//     $i++;
// }
