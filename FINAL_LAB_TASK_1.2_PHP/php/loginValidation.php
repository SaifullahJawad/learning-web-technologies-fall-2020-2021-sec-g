<?php


	require_once("../models/userService.php");

    if(isset($_POST["submit"]))
    {


        if(empty($_POST["username"]))
        {
			header("Location: ../view/login.php?msg=null_username");
        }
        else if(empty($_POST["password"]))
        {
			header("Location: ../view/login.php?msg=null_password");
        }
        else
        {

			$user = ["username" => $_POST["username"], "password" => $_POST["password"]];

            if(validateAdmin($user))
            {
				setcookie('isLoggedIn', 'true', time()+3600, '/');
				header("Location: ../view/home.php");
            }
            else
            {
				header("Location: ../view/login.php?msg=invalid_user");
			}
		}
    }
    else
    {
		header("Location: ../view/login.php");
	}
?>