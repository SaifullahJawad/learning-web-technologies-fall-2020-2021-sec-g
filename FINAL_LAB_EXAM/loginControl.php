<?php

    if(isset($_POST["login"]))
    {
        
        session_start();
    
        require_once("database.php");

        if(validateUser($_POST["username"], $_POST["password"]))
        {
            if(isset($_POST["rememberMe"]))
            {
                setcookie("loggedInUsername", $_POST["username"], time()+ 3600, "/");
                header("Location: home.php");
            }
            else
            {
                $_SESSION["loggedInUsername"] = $_POST["username"];
                header("Location: home.php");
            }
        }
        else
        {
            header("Location: login.php?msg=invalid_user");
        }
    }
    
    
            
?>