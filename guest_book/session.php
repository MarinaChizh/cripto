<?php
session_start();
// $_SESSION['a']=1;
// $_SESSION['b']=2;
if (!isset($_SESSION["count"])) 
$_SESSION["count"]=1;
    else
    $_SESSION["count"]++;
echo $_SESSION["count"];
?>