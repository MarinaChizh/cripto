<pre>
<html>
<head>
<title></title>
</head>

<body>
<form action="DZ preg_match.php" method="post">
   <textarea name="text" id="" cols="100" rows="10"><?php echo (isset($_POST['text'])) ?  $_POST['text'] :  "Введите текст";?></textarea>
   <input type = "text" name= "number" <?php echo (isset($_POST['number'])) ?  $_POST['number'] :  "Введите текст";?> >
    <input type="submit" value="Отправить">
</form>


<b>
<?php
echo "Количество символов в тексте:";
echo  preg_match_all  ('/./u', $_POST['text'],$matches);
echo "<br>";
echo "Количество слов в тексте:";
echo  preg_match_all  ('/\b\w{1,}\b/u', $_POST['text'],$matches);
echo "<br>";
echo "Количество слов длинной в заданное пользователем число букв:";
echo  preg_match_all  ('/\b\w{'.$_POST['number'].'}\b/u', $_POST['text'],$matches);




?>
</b>
<hr>

<?php
 print_r ($matches);
?>
</body>
</html>