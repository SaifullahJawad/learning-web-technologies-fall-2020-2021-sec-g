<?php


    if(!isset($_POST["create"]))
    {
        header("HTTP/1.0 404 Not Found");
        exit();
    }


    if(!isset($_SESSION))
    {
        session_start();
    }

    

    $errors = ["userName" => "", "password" => "", "confirmPassword" => "", "email" => "", "type" => ""];
    $previousInput = ["userName" => "", "password" => "", "confirmPassword" => "", "email" => "", "type" => ""];
    
    


    if(empty($_POST["userName"]))
    {
        $errors["userName"]= "*required";
    }
    else
    {
        $previousInput["userName"] = $_POST["userName"];
        if(!isValidName($_POST["userName"]))
        {
            $errors["userName"]= "*invalid";
        }
    }





    if(empty($_POST["password"]))
    {
        $errors["password"]= "*required";
    }
    else if(empty($_POST["confirmPassword"]))
    {
        $previousInput["password"] = $_POST["password"];
        $errors["confirmPassword"]= "*required";
    }
    else
    {
        
        if($_POST["password"] != $_POST["confirmPassword"])
        {
            $errors["password"]= "*password mismatch";
        }
        else
        {
            $previousInput["password"] = $_POST["password"];
            $previousInput["confirmPassword"] = $_POST["confirmPassword"];

        }
    }



    if(empty($_POST["email"]))
    {
        $errors["email"]= "*required";
    }
    else
    {
        $previousInput["email"] = $_POST["email"];
        if(!isValidEmail($_POST["email"]))
        {
            $errors["email"]= "*invalid";
        }
        
    }

    if(!isset($_POST["type"]))
    {
        $errors["type"] = "*required";
    }
   

    

    if( $errors["userName"] == "" && $errors["password"] == "" && $errors["confirmPassword"] == "" && $errors["email"] == "" && $errors["type"] == "" )
    {
 
        require_once("../db/db.php");


        $conn = getConnection();

        $userName = mysqli_real_escape_string($conn, $_POST["userName"]) ;
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $type= mysqli_real_escape_string($conn, $_POST["type"]);

        $sql = "INSERT INTO usermanagementsystem (userName, password, email, type) VALUES ('$userName', '$password', '$email', '$type')";
 
        if(mysqli_query($conn, $sql))
        {
            unset($_SESSION["errors"]);
            unset($_SESSION["previousInput"]);
            header("Location: ../view/userlist.php?msg=created");
        }
        else
        {
            unset($_SESSION["errors"]);
            unset($_SESSION["previousInput"]);
            header("Location: ../view/create.php?msg=failed");

        }
 

    }
    else
    {
        $_SESSION["errors"] = $errors;
        $_SESSION["previousInput"] = $previousInput;
        header("Location: ../view/create.php?msg=hasError");

    }



















    function isValidName( $name )
    {
        if(ctype_alpha($name) || (str_word_count($name) >= 2 && ctype_alpha(str_replace(" ", "", $name))) )
        { 
            return true;
        }
        else
        {
            return false;
        }
    }


    function isValidEmail( $email)
    {

        $atSign = strpos($email, "@");
        $lastDot = strripos($email, ".");


        if($atSign > 0 && $email[$atSign+1] != "." && substr_count($email, "@") == 1 && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
        {
            return true;
        }
        else
        {
            return false;
        }
    }








    

?>


