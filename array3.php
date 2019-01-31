<pre>
<?php
$a = [1,2,3,5,8];
function sum($a){
    $s=0;
    foreach ($a as $value) {
        $s=$s+$value;
    }
    return $s;
}
function sum2($a){
    $s=0;
    for ($i=0; $i < count($a); $i++) { 
        $s=$s+$a[$i];
} return $s;
}

echo sum($a);
echo"<br>";
echo sum2($a);
?>

<?php
$timeus=microtime();
sum($a);
echo $t1=microtime()-$timeus.    "Пользовательская";
echo "<br>";

/*$times=microtime();
for ($i = 1; $i < 10000; $i++) { 
       f($a);
}
echo $t2=microtime()-$times.  "Встроенная";
echo "<br>";
echo floor($t1/$t2);
?>*/

