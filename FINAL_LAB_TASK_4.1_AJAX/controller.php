<?php

    require_once("database.php");

    if(isset($_POST["email"]))
    {
        if(checkEmailUniqueness($_POST["email"]))
        {
            echo "exists";
        }
        
    }


    if(isset($_POST["name"]))
    {
        if(insertUser($_POST["name"], $_POST["email"], $_POST["gender"], $_POST["dob"], $_POST["bloodGroup"], $_POST["degrees"]))
        {
            echo "inserted";
        }
        
    }

?>