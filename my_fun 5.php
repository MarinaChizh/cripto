<?php
include "my_array_function.php";

function speed_test($fun, $arg, $n=100000){
    $time1=microtime(TRUE);
    for ($i=0; $i < $n ; $i++) { 
        $fun($arg);
    }
    $time2=microtime(TRUE);
    return $time2-$time1;
}

$array = array(1,2,3,4,5);

//array_sum
echo "array_sum => ".speed_test("array_sum", $array);
echo "<br>";
echo "my_array_sum =>" .speed_test("my_array_sum", $array);

echo "<br>";
echo "<br>";
echo "<br>";

//array_product
echo "array_product => ".speed_test("array_product", $array);
echo "<br>";
echo "my_array_product =>" .speed_test("my_array_product", $array);



?>