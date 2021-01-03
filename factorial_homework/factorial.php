<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>

    <?php
    $count = $_POST["count"];

    $result1 = 1;
    for ($i1 = $count; $i1 > 1; $i1 -= 1) {
        $result1 *= $i1;
    }
    echo "Факториал числа {$count} равен {$result1},<br>";


    ?>
</body>

</html>