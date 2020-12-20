<?php

    if(isset($_POST["login"]))
    {
        
        session_start();
    
        require_once("database.php");

        if(validateUser($_POST["username"], $_POST["password"]))
        {
            if(isset($_POST["rememberMe"]))
            {
                setcookie("loggedInUserId", $_POST["userId"], time()+ 3600, "/");
                header("Location: home.php");
            }
            else
            {
                $_SESSION["loggedInUserId"] = $_POST["userId"];
                header("Location: home.php");
            }
        }
        else
        {
            header("Location: login.php?msg=invalid_user");
        }
    }
    
    
            
?>