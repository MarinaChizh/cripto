<?php
$str=file_get_contents ("https://www.lipsum.com/");
function cut_sc($str){
    $str2 = preg_replace('/\<script(.*?)\>(.*)\<\/script\>/i', "", $str);
return $str2;
}


function cut ($str){
    $pat="/<.+?>/i";
    $rep="$1";
    $str2 = preg_replace ($pat, $rep, $str);
return $str2;
}
echo cut_sc(cut($str));
?>

<pre>
<hr>
<?php
echo "Количество слов длинной 14 букв:";
echo preg_match_all ('/\b\w{14}\b/u', $str, $matches);
echo "<br>";
print_r ($matches[0]);
?>

<?php
print_r (array_count_values($matches[0]));
?>


