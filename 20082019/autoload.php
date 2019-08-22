<?php
    spl_autoload_register(function ($class){
        $source = "App/".str_replace('\\', DIRECTORY_SEPARATOR, $class).".php";
        
        
        
        if (file_exists($source)){
            require_once $source;
        }
        
    });
?>