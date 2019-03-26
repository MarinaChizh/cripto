<?php
include "conect.php";
// echo 'UPDATE guestbook SET `nik`= "'. $_POST["nik"] . '", `msg`= "'. $_POST["msg"] . '" WHERE id = '.$_POST['id'];
mysqli_query($link,'UPDATE guestbook SET `nik`= "'. $_POST["nik"] . '", `msg`= "'. $_POST["msg"] . '" WHERE id = '.$_POST['id']);


header('location: new.php');






?>