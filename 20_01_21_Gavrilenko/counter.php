<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="csss.css">
    <title>Document</title>
</head>

<body class="color">
    <?php

    $fileName = "counter.txt";

    $fp = fopen($fileName, "r");
    $counter = fread($fp, filesize($fileName));
    fclose($fp);

    echo ++$counter;

    $fp = fopen($fileName, "w+");
    fwrite($fp, $counter);
    fclose($fp);
    ?>
</body>

</html>