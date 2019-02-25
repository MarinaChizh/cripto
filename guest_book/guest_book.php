<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>

<pre>
<?php
include "function.php";
//print_r ($_POST);
$msg=$_POST["msg"];
$nik=$_POST["nik"];
$email=$_POST["email"];
$date=date( "d.m.y H:i" );
file_put_contents("DATA.xml",file_get_contents("DATA.xml")."<post>\n<msg>$msg</msg>\n<nik>$nik</nik>\n<email>$email</email>\n<date>$date</date>\n</post>\n");
$str = file_get_contents("DATA.xml");

// print_r(get_msg_and_nik_from_xml($str))
$post_array = get_msg_and_nik_from_xml(bb_cod(smile(bad($str))));

?> 

<table border="1">
<tr bgcolor="#808080">
    <td>Сообщение</td>
    <td>Имя отправителя</td>
    <td>email </td>
    <td>Дата сообщения</td>
</tr>
    <?php
        foreach ($post_array as $value){
    echo "<tr>
            <td>$value[msg]</td>
            <td>$value[nik]</td>
            <td>$value[email]</td>
            <td>$value[date]</td>
          </tr>";
    }
    ?>
</table>



<form name="gbook"  method="post" action="">
        <table border="1" width="90%" align="center" bgcolor="#20B2AA" >
            <tr>
                <td width="50%" align="right" valign="top">Ваше имя:&nbsp;</td>
                <td width="50%" align="left"><input type="text" name="nik"></td>
            </tr>
            <tr>
                <td width="50%" align="right" valign="top">Ваш e-mail:&nbsp;</td>
                <td width="50%" align="left"><input type="text" name="email"></td>
            </tr>
            <tr>
                <td width="50%" align="right" valign="top">Ваше сообщение:&nbsp;</td>
                <td width="50%" align="left"><textarea name="msg" rows="6" cols="37"></textarea></td>
            </tr>
            <tr>
                <td width="50%" colspan="2" align="center"><input type="submit" name="send" value="Добавить сообщение" style="background-color: #008080"></td>
            </tr>
        </table>
</form>




</body>
</html>