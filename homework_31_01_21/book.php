<?php include "add.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php include "table.php" ?>
    <br>
    <h1> Оставьте свой отзыв. </h1>
    <form class="fro" action="?" method="post">
        <span><b>Name:</b></span><input class="row" type="text" name="name"><br><br>
        <span><b>Email:</b></span><input class="row" type="text" name="email"><br><br>
        <span><b>Messag:</b></span><br><textarea name="text" id="" cols="30" rows="10"></textarea><br>
        <input class="input_l" type="submit" value="ok">
       
    </form>
    <video class="video" src="Space - 2381.mp4" autoplay muted loop></video>
    
</body>

</html>