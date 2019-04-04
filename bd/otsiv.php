<?php
session_start();

$_SESSION["badform"] = [];
$_SESSION["form"] = $_POST;
$mysqli = new mysqli("localhost", "root", "", "mydb");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL:{" . $mysqli->connect_errno . "}" . $mysqli->connect_error;
}
if (empty($_POST["nik"])) {
    $_SESSION["badform"]["badnik"] = "Имя не заполнено";
}
if (empty($_POST["tel"])) {
    $_SESSION["badform"]["badtel"] = "Телефон не заполнен";
} elseif (!preg_match("/\+\d{5,16}/", $_POST["tel"])) {
    $_SESSION["badform"]["badtel"] = "Введите телефон корректно";
}
if (empty($_POST["email"])) {
    $_SESSION["badform"]["bademail"] = "Email не заполнен";
}
if (empty($_POST["otsiv"])) {
    $_SESSION["badform"]["badotsiv"] = "Напишите что-нибудь";
}

if (!empty($_SESSION["badform"])) {
    header("location: otsiv_form.php");
    exit();
}
$_SESSION["form"] = [];

$sql="INSERT INTO `table1`(`name`, `tel`, `email`, `otziv`, `mark`) VALUES ('" . $_POST["nik"] . "', '" . $_POST["tel"] . "', '" . $_POST["email"] . "', '" . $_POST["otsiv"] . "', '" . $_POST["mark"] . "')"; 
// echo $sql;
$mysqli->query($sql);
$mysqli->close();

echo "Спасибо за отзыв!!!!!";
echo "<br>";
echo "<img src='S4.png'>";






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="otsiv_style.css">
</head>

<body id="spasibo">

</body>

</html>