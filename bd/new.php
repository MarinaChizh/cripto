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
    $link = mysqli_connect("localhost", "root", "", "mygb");

    if (mysqli_connect_errno()) {
        echo "Не удалось подключиться к MySQL:(" . mysqli_connect_errno() . ") " . mysqli_connect_errno();
    }


    if (isset($_POST["msg"]) && isset($_POST["nik"])) {
        if (!empty(bad($_POST["msg"])) || !empty(bad($_POST["nik"]))) {
            echo '<span id="ban"> Вы забанены и не можeте писать </span>';
            $_SESSION["ban"] = time();
        } else {
            $insertquery =  "INSERT INTO guestbook(nik, msg) VALUES ('" . $_POST["msg"] . "', '" . $_POST["nik"] . "')";
            mysqli_query($link, $insertquery);
        }
    }

    // print_r($_POST);



    $res = mysqli_query($link, "SELECT*FROM guestbook");

    echo '<table id="tab">';
    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        echo '<tr>';
        foreach ($row as $v) {
            echo "<td>" . bb_cod(smile($v)) . "</td>";
        }
        echo '</tr>';
    }
    echo '</table>';

    mysqli_free_result($res);



    mysqli_close($link);



    ?>
    <?php
if (!isset($_SESSION['ban'])){
?>
    <form name="gbook" method="post" action="">
        <textarea name="msg" rows="6" cols="37" placeholder="Введите сообщение"></textarea><br>
        <input type="text" name="nik" placeholder="Введите  Ваше имя"><br>
        <input type="submit" value="Добавить сообщение">
    </form>
<?php
}
?>
   

</body>
</html>       