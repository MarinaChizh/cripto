<?php


header("Content-type:rext/csv; charset=utf-8");
header ("Content-Disposition:attachment;filename='text.csv'");

$mysqli = new mysqli("localhost", "root", "", "mydb");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL:{" . $mysqli->connect_errno . "}" . $mysqli->connect_error;
}

$res = mysqli_query($mysqli, "SELECT * FROM `table1`");

// Вывод записи
while ($row = $res->fetch_assoc()) {
foreach ($row as $kay=>$v) {
     echo mb_convert_encoding($v, "windows-1251", "utf-8").";";

}

echo "\n";

}
?>

