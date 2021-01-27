<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Chessboard Challenge</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="title-block">
        <h1 class="title">Задача о зёрнах на шахматной доске</h1>
      </div>

    </div>

    <div class="content-wrapper">
      <div class="content">
        <h3>
          ⠀</h3>

        <h1>Созданная Вами доска🧙‍♂️</h1>

        <br>
        <table>
          <?php
          $ans1 =  $_POST["x1"];
          $ans2 =  $_POST["x2"];
          $ans3 =  $_POST["x3"];

          function calcul($a, $b)
          {
            $chess = $a * $b;
            $result = 1;
            $sum = 0;
            $c = 1;
            while ($c <= $chess) {
              $sum += $result;
              $result *= 2;
              $c++;
            }
            return $sum;
          }

          $calcul = calcul($ans1, $ans2);

          $wt = ($calcul * $ans3) / 1000;

          $table = '';
          $width  = $ans1;
          $height = $ans2;
          for ($c = 1; $c <= $width; $c++) {
            $table .= '<tr>';
            for ($f = 1; $f <= $height; $f++) {
              $color = ($c + $f) % 2 ? '#BFA730' : 'black';
              $table .= "<td bgcolor='{$color}' width='20' height='20'></td>";
            }
            $table .= '</tr>';
          }
          echo $table;
          ?>
        </table>
        <br>
        <h3>Размер доски: <?php echo "$ans1 х $ans2"; ?></h3>
        <h3>Количество зёрен: <?php echo $calcul; ?>шт.</h3>
        <h3>Вес зёрен: <?php echo $wt; ?>Кг.</h3><br>
      </div>

</body>

</html>