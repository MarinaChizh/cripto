<?php session_start();
if (isset($_SESSION['ban']) && ($_SESSION['ban'] + 5) < time()) {
    unset($_SESSION['ban']);
}
?>

<?php
 // if (isset($_POST["msg"]) && isset($_POST["nik"])) {
//     if (bad($_POST["msg"])) {
//         echo "Вы заблокированы";
//         $_SESSION["ban"] = time();
//     }else{
//          $msg_array[] = array('msg' => $_POST['msg'], 'nik' => $_POST['nik']);
//     }

// } else {

// }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <?php
    include "function.php";
    include "conect.php";


    // print_r($_POST);



    $res = mysqli_query($link, "SELECT*FROM guestbook");

    echo '<table id="tab">';
    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        echo '<tr>';
        foreach ($row as $v) {
            echo "<td>" . bb_cod(smile($v)) . "</td>";
        }
        echo '<td><a href ="del.php?id=' . $row["id"] . '"><img height="30" src="waste-filled.png" width="30"></p>
        </td><td><a href = "show_edit.php?id=' . $row["id"] . '"><img height="50" src="Edit_icon-icons.com_71853.png" width="50"></p>
        </td></tr>';
    }
    echo '</table>';

    mysqli_free_result($res);



    mysqli_close($link);



    ?>
    <?php
    if (!isset($_SESSION['ban'])) {
        ?>
    <form name="gbook" method="post" action="add.php">
        <textarea name="msg" rows="6" cols="37" placeholder="Введите сообщение"></textarea><br>
        <input type="text" name="nik" placeholder="Введите  Ваше имя"><br>
        <input type="submit" value="Добавить сообщение">
    </form>
    <?php

}
?>


</body>

</html> 