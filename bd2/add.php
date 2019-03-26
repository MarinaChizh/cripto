<?php
include "conect.php";
if (isset($_POST["msg"]) && isset($_POST["nik"])) {

    $insertquery =  "INSERT INTO guestbook(nik, msg) VALUES ('" . $_POST["nik"] . "', '" . $_POST["msg"] . "')";
    mysqli_query($link, $insertquery);
}

header('location: new.php');

 ?>