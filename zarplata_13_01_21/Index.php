<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Зарплатная ведомость</h1>
    <table border="1" width="500px">
        <tr>
            <th>N</th>
            <th>Имя,Фамилия.</th>
            <th>Сумма, USD.</th>
        </tr>

        <?php

        $zp = [
            [1, " Василий Иванов", 150],
            [2, " Лука Смирнов", 230],
            [3, " Григорий Соболев", 340],
            [4, "Брюс Уэйн", 9682450750],
            [5, "Энтони Старк", 150000000],
            [6, "Илон Маск", 37440],
        ];

        function arr($zpl)

        {
            foreach ($zpl as list($x, $y, $z)) {
                $tab = "<tr>";
                echo "<td>$x</td>";
                echo "<td>$y</td>";
                echo "<td>$z</td>";
                echo "</tr>";
            }
            return $tab;
        }

        echo arr($zp);

        ?>
    </table>
</body>

</html>