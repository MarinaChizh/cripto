<?php

session_start();
include_once "core/config.php";
spl_autoload_register(function($class) {
    $sources = array("controllers/$class.php", "models/$class.php", "views/$class.php");
    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    }
});

include_once "core/router.php";
// $obj = new basicController();
// $obj -> test();
// echo $obj -> classNameNP();
// $obj = new basicModel();
// $obj -> test();
// $obj = new basicView();
// $obj -> test();

?>