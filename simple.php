<?php
$text = file_get_contents ("sample.html");
//$str= file_get_contents ("sample.html");
//$pat= "/<body>[^a-zA-ZА-Яа-я\s]<\/body>/";
//$rep="$3";
//$str2 = preg_replace ($pat, $rep, $str);
 
 echo mb_eregi_replace('[^a-zA-ZА-Яа-я\s]', '', $text);

?>
