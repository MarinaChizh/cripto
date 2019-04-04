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


<form>
<select name="sort" id="sort">
            <option value="1"></option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
</form>

<?php
$mysqli = new mysqli("localhost", "root", "", "mydb");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL:{" . $mysqli->connect_errno . "}" . $mysqli->connect_error;
}
$res=$mysqli->query("SELECT * FROM table1 ORDER BY time DESC");

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
