<pre>
<?php
if (preg_match_all ('/да|yes/', $_POST['text'], $matches)) 
   print_r ($matches);
?>



<html>
<head>
<title></title>
</head>

<body>
<form action="preg_match.php" method="post">
    <input type="text" name="text"> 
    <input type="submit" value="Отправить">
</form></body>

</html>