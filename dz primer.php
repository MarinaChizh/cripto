<?php
include "my_array_function.php";
$array = array(1,2,3,4,5);
?>


<?php
function my_array_sum($fun, $arg, $n=100000){
    $time1=microtime(TRUE);
    for ($i=0; $i < $n ; $i++) { 
        $fun($arg);
    }
    $time2=microtime(TRUE);
    return $time2-$time1;
}
// echo pow(2, .5); // 2*(1/2)
function array_product($x){
    return pow($x, .5);
}

echo my_array_sum("product", 20);
echo "<br>";
echo my_array_sum("array_product", 20);

?>



<?php

$start = microtime();
for ($i=0; $i < 10000; $i++) { 
    my_array_product($array);
}
$time1 = microtime() - $start;
echo 'Время выполнения пользовательской функции: ' . $time1 . 'микросекунд <br>';


$start = microtime();
for ($i=0; $i < 10000; $i++) { 
    array_product($array);
}
$time2 = microtime() - $start;
echo 'Время выполнения стандартной функции: ' . $time2 . 'микросекунд <br>';