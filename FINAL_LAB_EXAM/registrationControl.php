<?php

    require_once("database.php");


    if(isset($_POST["register"]))
    {
        if(createUser($_POST["name"], $_POST["contact"], $_POST["username"], $_POST["password"]))
        {
            header("location: register.html");
        }
    }





?>