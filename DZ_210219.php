<?php
//$str = "Hello, boy, ggggg, hhhhh";
$str=file_get_contents ("https://www.lipsum.com/");
$pat="/<.+?>/";
$rep="$1";
$str2 = preg_replace ($pat, $rep, $str);
//echo htmlspecialchars($str2);
echo $str2;
?>

<pre>
<hr>
<?php
echo "Количество слов длинной 14 букв:";
echo preg_match_all ('/\b\w{14}\b/u', $str, $matches);
echo "<br>";
print_r ($matches);
?>

<?php
foreach($matches as $key => $value)
{
echo "[$key]", "$value";
}
//print_r (array_count_values($matches));
?>