<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="otsiv_style.css">
</head>
<body>
<?php

$mysqli = new mysqli("localhost", "root", "", "mydb");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL:{" . $mysqli->connect_errno . "}" . $mysqli->connect_error;
}
$mysqli->query("INSERT INTO `table1`(`name`, `tel`, `email`, `otziv`, `mark`) VALUES ('" . $_POST["nik"] . "', '" . $_POST["tel"] . "', '" . $_POST["email"] . "', '" . $_POST["otsiv"] . "', '" . $_POST["mark"] . "')");
$mysqli->close();

echo "Спасибо за отзыв";


?>
</body>
</html>

