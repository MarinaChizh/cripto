<?php
$time_start = microtime(1);
     for ($i=0; $i < 1000; $i++){
// Ничего не делал. Поторить 1000 раз
     }
$time_end = microtime(1);
     $time = $time_end - $time_start;
     echo "Ничего не делал $time секунд\n";
echo "<br>";
?>

<?php
$today = getdate();
print_r($today);
$day["Monday"] = "Понедельник";
$day["Tuesday"] = "Вторник";
$day["Wednesday"] = "Среда";
$day["Thursday"] = "Четверг";
$day["Friday"] = "Пятница";
$day["Saturday"] = "Суббота";
$day["Sunday"] = "Воскресенье";
echo $day[$today["weekday"]];
echo "<br>";
?>
<?php
echo date("F j, Y, g:i a")."<br>";
echo date("m.d.y")."<br>";
echo date("j,n,Y")."<br>";
echo date("Ymd")."<br>";
echo date("h-i-s, j-m-y, it is w Day z")."<br>";
echo date("D M j G:i;s T Y")."<br>";
echo "<br>";
?>
<?php
echo date ("M-d-Y", mktime (0,0,0,01,24,2019));
?>