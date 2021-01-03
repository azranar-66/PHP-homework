
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
    $N1 = $_POST["N1"];
    $N2 = $_POST["N2"];
    $N3 = $_POST["N3"];
    $N4 = $_POST["N4"];
    $N5 = $_POST["N5"];
    $N6 = $_POST["N6"];
    $N7 = $_POST["N7"];
    $N8 = $_POST["N8"];
    $N9 = $_POST["N9"];
    $N10 = $_POST["N10"];


    if ($N1 == "2003") {
        $i++;
    }
    if ($N2 == 4) {
        $i++;
    }
    if ($N3 == 3) {
        $i++;
    }
    if ($N4 == 3) {
        $i++;
    }
    if ($N5 == 2) {
        $i++;
    }
    if ($N6 == 4) {
        $i++;
    }
    if ($N7 == 2) {
        $i++;
    }
    if ($N8 == 3) {
        $i++;
    }
    if ($N9 == 4) {
        $i++;
    }
    if ($N10 == "Что за вопрос? Конечно хочу!") {
        $i++;
    }
    if ($i >= 5) {
        echo "<h1>Тест пройден.</h1>";
    } else {
        echo "<h1>Тест завален!!!<h1>";
    }
?>
    </body>
    </html>