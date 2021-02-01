<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
$data = file_get_contents("guest_data.txt");
$records = explode("<======>", $data);
echo "<div class=table>";
echo "<table border=1>";
echo "<th>Name</th><th>Email</th><th>Messag</th>";
foreach ($records as $record) {
    $row = explode("\n", trim($record));

    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}

echo "</table>";
echo "</div>";
?>

</body>
</html>
