<?php
$conf['host'] = "127.0.0.1";
$conf['nik'] = "root";
$conf['password'] = "";
$conf['bd'] = "mydb";
$conf['page_size'] = 3;
spl_autoload_register(function ($name) {
    include 'classes/' . $name . '.php';
});





?>