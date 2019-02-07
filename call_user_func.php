<?php
function sum($a, $b){
    return $a+$b;
}
function sum2($a, $b, $c){
    return $a+$b+$c;
}
print_r (call_user_func("sum", 5 ));