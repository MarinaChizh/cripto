<?php

function my_fun($name){
    $name();
}
my_fun(function(){
    echo"Hello";
});
?>