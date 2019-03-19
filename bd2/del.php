<?php
include "conect.php";

    
    mysqli_query($link, "DELETE FROM guestbook WHERE id = ".$_GET['id']);

header('location: new.php');






?>