<?php


    if(!isset($_POST["submit"]))
    {

        header("HTTP/1.0 404 Not Found");
        exit(); 

    }

    if(!isset($_SESSION))
    {
        session_start();
    }

    $message = ["currentPassword" => "", "newPassword" => "", "reTypePassword" => ""];
    





    if(empty($_POST["currentPassword"]))
    {
        $message["currentPassword"]= "*required";
    }

    if(empty($_POST["newPassword"]))
    {
        $message["newPassword"]= "*required";
    }

    if(empty($_POST["reTypePassword"]))
    {
        $message["reTypePassword"]= "*required";
    }
    

   if(!empty($_POST["currentPassword"]) && !empty($_POST["newPassword"]) && !empty($_POST["reTypePassword"]))
    {

        if($_POST["currentPassword"] == $_SESSION["password"])
        {
            if(!isValidPassword($_POST["newPassword"], $_POST["reTypePassword"]))
            {
                $message["newPassword"]= "*password mismatch";
            }
        }
        else
        {
            $message["currentPassword"]= "*wrong password";
        } 


    }


   

    

    if( $message["currentPassword"] == "" && $message["newPassword"] == "" && $message["reTypePassword"] == "" )
    {
        
        $_SESSION["password"] = $_POST["newPassword"];
        $message = ["currentPassword" => "password updated successfully", "newPassword" => "", "reTypePassword" => ""];
        $_SESSION["message"] = $message;

    }
    else
    {
        $_SESSION["message"] = $message;

    }






















    function isValidPassword( $password, $confirmPassword )
    {
        if($password == $confirmPassword)
        {
            return true;
        }
        else
        {
            return false;
        }
    }










    

?>


