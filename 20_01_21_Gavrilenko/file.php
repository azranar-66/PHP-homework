<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Opros</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title-block">
                <h1 class="title">Сколько нужно зайцев чтобы вкрутить лампочку?</h1>
            </div>

        </div>

        <div class="content-wrapper">
            <div class="content">
                <br>
                <?php


                $fileName = "file1.txt";
                $answer = $_POST["q1"];

                $count = explode(PHP_EOL, file_get_contents($fileName));

                $count[$answer]++;

                file_put_contents($fileName, implode(PHP_EOL, $count));

                $sumAnswers = array_sum($count);

                $procent = [];


                foreach ($count as $value) {
                    $procent[] = round(($value / $sumAnswers * 100), 1);
                }


                echo '<h3><p>Результаты голосования</p></h3>';
                ?>
                <br>
                <table class="text">
                    <tr>
                        <td>
                            <br>
                            <h4>Всего голосов:<?php echo $sumAnswers ?></h4><br>

                            <br>

                            Пять! Один крутит,а четверо смотрят.: <?= $count[0] ?>.
                            <p><?= $procent[0] ?>%<br></p>

                            <br>

                            У зайцев лапки!: <?= $count[1] ?>.
                            <p><?= $procent[1] ?>%<br></p>


                            <br>


                            Какие зайцы! Наркоман Штоле?: <?= $count[2] ?>.
                            <p><?= $procent[2] ?>%<br></p>

                            <br>

                            Жыве Беларусь!: <?= $count[3] ?>.
                            <p><?= $procent[3] ?>%<br></p>


            </div>

</body>

</html>