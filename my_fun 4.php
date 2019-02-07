<?php
function speed_test($fun, $arg, $n=100000){
    $time1=microtime(TRUE);
    for ($i=0; $i < $n ; $i++) { 
        $fun($arg);
    }
    $time2=microtime(TRUE);
    return $time2-$time1;
}
// echo pow(2, .5); // 2*(1/2)
function my_sqrt($x){
    return pow($x, .5);
}

echo speed_test("sqrt", 20);
echo "<br>";
echo speed_test("my_sqrt", 20);

?>