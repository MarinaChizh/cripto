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
    include "conect.php";
    $result  = mysqli_query($link, "SELECT  `msg`, `nik`  FROM guestbook WHERE id = " . $_GET['id']);
    $row = mysqli_fetch_assoc($result);
    // print_r($row);


    ?>
    <form name="" method="post" action="edit.php">
<input type="hidden" name="id" value=<?=$_GET['id']?>>
        <textarea name="msg" rows="6" cols="37"><?=$row["msg"]?></textarea><br>
        <input type="text" name="nik" value="<?=$row["nik"]?>"><br>
        <input type="submit">
    </form>

</body>

</html> 