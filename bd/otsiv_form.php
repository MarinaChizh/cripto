<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Document</title>
    <link rel="stylesheet" href="otsiv_style.css">
</head>

<body>

    <form id="form" method="POST" action="otsiv.php">
        <?=$_SESSION["badform"]["badnik"]?>
        <input type="text" name="nik" id="name" placeholder="Имя" value="<?=$_SESSION["form"]["nik"]?>" class="<? if(empty($_SESSION['form']["nik"])){echo 'redbord';}?>"><br>
        <?=$_SESSION["badform"]["badtel"]?>
        <input type="tel" name="tel" id="tel" placeholder="Телефон" value="<?=$_SESSION["form"]["tel"]?>" class="<? if(empty($_SESSION['form']["tel"])){echo 'redbord';}?>"><br>
        <?=$_SESSION["badform"]["bademail"]?>
        <input type="email" name="email" id="email" placeholder="Email" value="<?=$_SESSION["form"]["email"]?>" class="<? if(empty($_SESSION['form']["email"])){echo 'redbord';}?>"><br>
        <?=$_SESSION["badform"]["badotsiv"]?>
        <textarea name="otsiv" id="otsiv" placeholder="Отзыв" value="<?=$_SESSION["form"]["otsiv"]?>" class="<? if(empty($_SESSION['form']["otsiv"])){echo 'redbord';}?>"></textarea><br>
        <div>Оцените мероприятие</div><br>
    Оценка<select name="mark" id="mark">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Отправить" id="submit">

    </form>
</body>

</html> 