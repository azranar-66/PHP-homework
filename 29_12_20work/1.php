
    <?php
    // $arr=[1,2,3,4,5,6,7,8,9,10,11];
    // // print_r($arr);
    // for ($i=0; $i <count($arr); $i++) { 
    //     echo $arr[$i]."<br>";

    // }

    // foreach($arr as $value){
    //     echo $value."<br>";
    // }
    // $sum = 0;
    // $arr = array(4, 11, 101, 241, 156);

    // for ($i = 0; $i < count($arr); $i++) {
    //     $sum += $arr[$i] . "<br>";
    // }

    // echo $sum . "<br>";

    // $sum1 = 0;
    // foreach ($arr as $value) {
    //     $sum1 += $value;
    // }
    // echo $value . "<br>";

    // $arr = [1, 2, 3, 4, 5];

    // foreach ($arr as $value) {

    //     echo "$value<br>";

    // }
    // foreach ($arr as $key => $value) {

    //     echo "$key = $value<br>";

    // }

  

    $a = $_POST["z1"];

    $numbers = [
        "мир" => "peace",
        "дверь" => "door",
        "мяч" => "boll"

    ];

    if (isset($numbers[$a])) {
        echo $numbers[$a];
    } else {
        echo "Слово не задано!";
    }
