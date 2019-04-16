<?php
 session_start();
include "config.php";
        if (($log==$_POST["log"]) and ($password==$_POST["password"])){
            $_SESSION['logged']=true;
            header("location: admin.php");
         } else {
                header("location: login_form.html");
            }
            
           
            
            
                    
?>