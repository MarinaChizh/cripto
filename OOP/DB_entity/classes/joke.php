<?php
include_once "config.php";

$link = mysqli_connect($conf['host'], $conf['nik'], $conf['password'], $conf['bd']);
$DB = new joke2($link, 'joke');

    print_r ($DB->get_random_field());
?>