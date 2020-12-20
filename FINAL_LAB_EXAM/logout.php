<?php


    session_start();
    session_destroy();
    setcookie("loggedInUsername", "", time()- 3600, "/");
    header("Location: login.php");


?>