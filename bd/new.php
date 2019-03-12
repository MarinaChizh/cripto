<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $link=mysqli_connect("localhost", "root", "", "mygb");
    if (mysqli_connect_errno()) {
        echo "Не удалось подключиться к MySQL:(" . mysqli_connect_errno() . ") " . mysqli_connect_errno();
    }
    $res = mysqli_query($link, "SELECT*FROM guestbook");
    echo '<table border="1">';
    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        echo '<tr>';
            foreach ($row as $v){
                echo "<td>$v</td>";
            }
        echo '</tr>';
    }
    echo '</table>';
    mysqli_free_result($res);
    mysqli_close($link);
    ?>


<form name="gbook"  method="post" action="">
        <table border="1" width="90%" align="center" >
            <tr>
                <td width="50%" align="right" valign="top">Ваше имя:&nbsp;</td>
                <td width="50%" align="left"><input type="text" name="nik"></td>
            </tr>
            <tr>
                <td width="50%" align="right" valign="top">Ваше сообщение:&nbsp;</td>
                <td width="50%" align="left"><textarea name="msg" rows="6" cols="37"></textarea></td>
            </tr>
            <tr>
                <td width="50%" colspan="2" align="center"><input type="submit"  value="Добавить сообщение"></td>
            </tr>
        </table>
</form>
<pre>
<?php
print_r ($_POST);

?>
</body>
</html>