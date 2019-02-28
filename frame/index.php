<?php 
session_start();
if (isset($_POST["login_form"]) && ($_POST["login_form"] == "login")) {
    $_SESSION["username"] = $_POST["nik"];
    $_SESSION["color"] = $_POST["color"];
    $_SESSION["font"] = $_POST["font"];
}


switch ($_GET["pg"]) {
    case 'pg1':
        $filename = "str1.php";
        break;
    case 'pg2':
        $filename =  "str2.php";
        break;
    case 'pg3':
        $filename =  "str3.php";
        break;
    case 'login':
        $filename =  "login.php";
        break;
    case 'loginout':
        $_SESSION = array();
        header("Location: ?");
        break;
    default:
        $filename =  "str1.php";
        break;
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {background-color:<?=isset($_SESSION["color"]) ? $_SESSION["color"] : "white" ?>}
        body {font color: <?=isset($_SESSION["font"]) ? $_SESSION["font"] : "black" ?> ;}
    </style>
</head>

<body>

    <table border=1 width=100% height=100px>
        <tr>
            <td width=100>
                <?php include "menu.php"; ?>
            </td>
            <td>
                <?php 
                include $filename;
                ?>

            </td>
        </tr>
    </table>

    <?php
    if (isset($_SESSION["username"])) {
        echo "Вы вошли как:" . $_SESSION["username"];
    }
    ?>
</body>

</html>