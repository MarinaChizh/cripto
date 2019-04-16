<?php
session_start();
include 'config.php';
if ($log==$_POST['log']&& $password['password']) {
   $_SESSION['logget']=true;
   header('location: admin.php');
}else{
    header("location: login_form.html");
}








?>