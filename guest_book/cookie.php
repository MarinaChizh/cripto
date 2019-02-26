<?php
//$value = 'fgпривет';
//setcookie("TestCookie", $value);
//setcookie("TestCookieee", $value, time()+20);
if (!isset($_COOKIE["count"])) 
    setcookie("count",1);
    else
    setcookie("count",$_COOKIE["count"]+1);
echo $_COOKIE["count"];
?>