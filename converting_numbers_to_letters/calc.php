<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $y = $_POST["x"];

    $z = str_split($y);

    $arr = [
        "ноль",
        "один",
        "два",
        "три",
        "четыре",
        "пять",
        "шесть",
        "семь",
        "восемь",
        "девять"
    ];

    foreach ($z  as  $value) {

        if (is_numeric($value)) {

            echo  " " . $arr[$value];
        } else {

            echo " " . $value;
        }
    }

    ?>
</body>

</html>