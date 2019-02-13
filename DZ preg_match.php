<pre>
<html>
<head>
<title></title>
</head>

<body>
<form action="DZ preg_match.php" method="post">
   <textarea name="text" id="" cols="100" rows="10"><?php if (isset($_POST['text'])) echo $_POST['text']; else echo "Введите текст";?></textarea>
   <input type = "text" name= "number"> </input>
    <input type="submit" value="Отправить">
</form>


<b>
<?php
//echo preg_match_all ('/\/\*.*?\*\\//', $_POST['text'],$matches) ;
//echo preg_match_all ('/\b\w{5}\b/u', $_POST['text'],$matches);
//echo preg_match_all ('/да|yes/i' , $_POST['text'],$matches);
//echo preg_match_all ('/[А-Я].*?\./u' , $_POST['text'],$matches);
//echo preg_match_all ('/[А-Я].*?(\.\.\.|\?|\.)/u' , $_POST['text'],$matches);
echo "Количество символов в тексте:";
echo  preg_match_all  ('/./u', $_POST['text'],$matches);
echo "<br>";
echo "Количество слов в тексте:";
echo  preg_match_all  ('/\b\w{1,}\b/u', $_POST['text'],$matches);
echo "<br>";
echo "Количество слов длинной в заданное пользователем число букв:";
echo  preg_match_all  ('/\b\w{4}\b/u', $_POST['text'],$matches);




?>
</b>
<hr>

<?php
 print_r ($matches);
?>
</body>
</html>