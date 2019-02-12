<pre>
<html>
<head>
<title></title>
</head>

<body>
<form action="preg_match2.php" method="post">
   <textarea name="text" id="" cols="100" rows="10"></textarea>
    <input type="submit" value="Отправить">
</form>


<b>
<?php
//echo preg_match_all ('/\/\*.*?\*\\//', $_POST['text'],$matches) ;
//echo preg_match_all ('/\b\w{5}\b/u', $_POST['text'],$matches);
//echo preg_match_all ('/да|yes/i' , $_POST['text'],$matches);
//echo preg_match_all ('/[А-Я].*?\./u' , $_POST['text'],$matches);
echo preg_match_all ('/[А-Я].*?(\.\.\.|\?|\.)/u' , $_POST['text'],$matches);

?>
</b>
<hr>

<?php
 print_r ($matches);
?>
</body>
</html>