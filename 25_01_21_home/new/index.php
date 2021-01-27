<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
        include "Config.php";

        $data = file($fileName);
        
        if (isset($_POST["answer"])) {
            $currentAnswer = $_POST["answer"];
            $buff = explode($separator, $data[$currentAnswer + 1]);
            $buff[1] += 1;
            $buff[1] .= "\n";
            $data[$currentAnswer + 1] = $buff[0] . $separator . $buff[1];
            file_put_contents($fileName, implode("", $data));
        }

        $quest = $data[0];
        unset($data[0]);

        $answer = [];
        foreach ($data as  $value) {
            $answer[] = explode(" - ", $value);
        }
        

        ?>
        <form action="?" method="post">
            <p> <?= $quest ?></p>
            <br>


            <?php
            foreach ($answer as $key => $value) {
                $count = $value[1] * 1;
                echo     "<input type='radio' name='answer' value='$key'>$value[0]($count)%<br><br><div style='height:7px; background-color: black; width:$count%' ></div><br>\n";
            }
           


            ?>
            <input type="submit" value="ok">

        </form>
    </div>
</body>

</html>