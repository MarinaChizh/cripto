<?php
$str= file_get_contents ("sample.html");
$pat="/(.*?)/";
$rep="$1";
$str2 = preg_replace ($pat, $rep, $str);
 
 echo $str2;

?>