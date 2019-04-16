<?php
session_start();
unset($_SESSION['logged']);
header("location: login_form.html");
?>