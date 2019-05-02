<?php
require_once "class_mustang.php";
require_once "class_tesla.php";
$auto=new Tesla;
$auto->fill_tank(20);
echo $auto->drive();
echo "<br>";
echo $auto->drive();
echo "<hr>";
echo $auto->drive();
echo "<hr>";
$auto1=new Mustang;
echo $auto1->drive();
echo "<br>";
echo $auto1->drive();
