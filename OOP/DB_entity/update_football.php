<?php
include_once "DB_entity.php";
    include_once "config.php";
    $link = mysqli_connect($conf['host'], $conf['nik'], $conf['password'], $conf['bd']);
    $DB = new DB_entity($link, 'football');

    $DB->update($_GET['name'], $_POST);
    header('location:football_admin.php');














    ?>