<?php

$msg="Hello";
$test = function()use($msg){
    echo $msg;
};

$msg="bye";

$test();
?>

<?php
echo "<br>";
$msg="Hello";
$test = function()use(&$msg){
    echo $msg;
};

$msg="Bye";

$test();
?>