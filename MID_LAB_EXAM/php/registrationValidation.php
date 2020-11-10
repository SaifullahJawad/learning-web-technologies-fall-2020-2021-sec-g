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

    $errors = ["id" => "", "password" => "", "confirmPassword" => "", "name" => "", "userType" => ""];
    $previousInput = ["id" => "", "name" => "", "userType" => "", "password" => ""];
    
    


    if(empty($_POST["id"]))
    {
        $errors["id"] = "*required";
    }
    else
    {
        $previousInput["id"] = $_POST["id"];
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
        
        if(!isValidPassword($_POST["password"], $_POST["confirmPassword"]))
        {
            $errors["password"]= "*password mismatch";
        }
        else
        {
            $previousInput["password"] = $_POST["password"];
            $previousInput["confirmPassword"] = $_POST["confirmPassword"];
        }
        
    }





    if(empty($_POST["name"]))
    {
        $errors["name"]= "*required";
    }
    else
    {
        $previousInput["name"] = $_POST["name"];
        if(!isValidName($_POST["name"]))
        {
            $errors["name"]= "*invalid";
        }
    }




    if( !isset($_POST["userType"]) )
    {
        $errors["userType"] = "*required";
    }
    else
    {
        $previousInput["userType"] = $_POST["userType"];
    }


   

    

    if( $errors["id"] == "" && $errors["password"] == "" && $errors["confirmPassword"] =="" && $errors["name"] =="" && $errors["userType"] =="" )
    {
        

        $fileHandler = fopen("../userData.txt", "a");
        fwrite($fileHandler, $_POST["id"]."|".$_POST["password"]."|".$_POST["name"]."|".$_POST["userType"] );
        

        unset($_SESSION["previousInput"]);
        unset($_SESSION["errors"]);


        header("Location: ../php/login.php");
    }
    else
    {
        $_SESSION["errors"] = $errors;
        $_SESSION["previousInput"] = $previousInput;
    }





    function isValidName( $name )
    {
        if(str_word_count($name) >= 2  && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(" ", "", $name)) )
        { 
            return true;
        }
        else if(str_word_count(str_replace(".", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(".", "", $name)) && $name[strlen($name)-1] != "." )
        {
            return true;
        }
        else if(str_word_count(str_replace("-", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace("-", "", $name)) && $name[strlen($name)-1] != "-" )
        {
            return true;
        }
        else
        {
            return false;
        }
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


