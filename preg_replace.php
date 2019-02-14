<?php
$str="Всем <b>Привет</b> !!!";
$pat="/<b>.*<\/b>/i";
$rep="<i>$0</i>";
$str2 = preg_replace ($pat, $rep, $str);
echo $str2;

echo "<br>";
?>
<?php
$str="Всем <b>Привет</b> !!!";
$pat="/<b>(.*)<\/b>/i";
$rep="<i>$1</i>";
$str2 = preg_replace ($pat, $rep, $str);
echo $str2;
?>

<pre>
<html>
<head>
<title></title>
</head>

<body>
<form action="preg_replace.php" method="post">
<textarea name="text" id="" cols="100" rows="10"><?php echo (isset($_POST['text'])) ?  $_POST['text'] :  "Введите текст";?></textarea>
    <input type="submit" value="Отправить">
</form>
<?php
$str=$_POST['text'];
// $pat="/<\s*b\s*>(.*)<\/\s*b\s*>/i";
//$pat="/(<\s*b\s*>(.*)<\/\s*b\s*>)|(<\s*i\s*>(.*)<\/\s*i\s*>)|(<\s*u\s*>(.*)<\/\s*u\s*>)/i";
$pat="/<.+?>/";
$rep="$1";
$str2 = preg_replace ($pat, $rep, $str);
 echo htmlspecialchars($str2);
 //echo $str2;
?>


</body>
</html>