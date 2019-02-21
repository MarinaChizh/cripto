<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<pre>
<?php




//print_r ($_POST);
$msg=$_POST["msg"];
$nik=$_POST["nik"];


file_put_contents("DATA.xml",file_get_contents("DATA.xml")."<post>\n    <msg>$msg</msg>\n    <nik>$nik</nik>\n</post>\n");
$str = file_get_contents("DATA.xml");

function get_msg_and_nik_from_xml($str)
{
    $matches = null;
    preg_match_all('/<post>(.*?)(<msg>(.*?)<\/msg>)(.*?)(<nik>(.*?)<\/nik>)(.*?)<\/post>/ius', $str, $matches);

    $msg = $matches[3];
    $nik = $matches[6];

    $array = array();
    foreach ($msg as $key => $value) {
        $array[] = array("msg" => $msg[$key], "nik" => $nik[$key]);
    }

    return  $array;
}



// print_r(get_msg_and_nik_from_xml($str))

$post_array = get_msg_and_nik_from_xml($str);



?> 

<table border="1">


<?php

foreach ($post_array as $value){
echo "<tr><td>$value[msg]</td><td>$value[nik]</td></tr>";
}
?>

</table>



<form action="?" method="POST">

        <textarea name="msg"></textarea>
        <input type="text" name="nik">
        <input type="submit" value="Отправить">
        
</form>


</body>
</html>