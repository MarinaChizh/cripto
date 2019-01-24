<html>
<head>
<title>Голосование</title>
</head>
<body>
</body>
<?php
$arr=file("voters.txt");
if(isset($_POST["vot"])&&($_POST["vot"]!=0)){
    $arr[$_POST["vot"]] = explode(" - ", $arr[$_POST["vot"]])[0].
        " - ".
        (explode(" - ", $arr[$_POST["vot"]])[1]+1)."\n";
}
file_get_contents("voters.txt",implode("",$arr));

print_r($arr);
?>

<form action="" method="POST">
    <h1><?=$arr[0]?></h1>
<?php
for ($i=1; $i <count($arr); $i++){
    $text = explode("-", $arr[$i])[0];
    ?>
    <input type="radio" name="vot" id="" value="<?=$i?>"><?=$text?><br>
    <?php
}
?>
<input name="submit" type="submit" value="Ответ">
<br> 
</body>
</html>
