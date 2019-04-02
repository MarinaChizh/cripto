<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../otsiv_style.css">
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "mydb");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL:{" . $mysqli->connect_errno . "}" . $mysqli->connect_error;
}
$res=$mysqli->query("SELECT * FROM table1");

while ($row=$res->fetch_assoc()) {
  ?>  
 <div class="comment">
<div> Имя: <?=$row['name']?></div>
<div> Телефон: <?=$row["tel"]?></div>
<div> Email: <?=$row["email"]?></div>
<div> Отзыв: <?=$row["otziv"]?></div>
<div> Оценка: <?=$row["mark"]?></div>
<div> Время: <?=$row["time"]?></div>


</div> 
    <?php
}






$mysqli->close();



?>
</body>
</html>
