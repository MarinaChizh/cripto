<pre>
<?php
include "my_array_function.php";
$array = array(1,2,3,4,5);
$array1= array('a','b','c','d');

print_r (my_array_reverse($array));

?>

<?php

$start = microtime(TRUE);
for ($i=0; $i < 10000; $i++) { 
    my_array_reverse($array);
}
$time1 = microtime(TRUE) - $start;
echo 'Время выполнения пользовательской функции: ' . $time1 . 'микросекунд <br>';


$start = microtime(TRUE);
for ($i=0; $i < 10000; $i++) { 
    array_reverse($array);
}
$time2 = microtime(TRUE) - $start;
echo 'Время выполнения стандартной функции: ' . $time2 . 'микросекунд <br>';