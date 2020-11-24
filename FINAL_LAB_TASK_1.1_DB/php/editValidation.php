<?php


    if(!isset($_POST["update"]))
    {

        header("HTTP/1.0 404 Not Found");
        exit(); 

    }



    if(!isset($_SESSION))
    {
        session_start();
    }

    $errors = ["userName" => "", "password" => "", "newPassword" => "", "reTypePassword" => "", "email" => ""];
    
    



    if(empty($_POST["userName"]))
    {
        $errors["userName"]= "*required";
    }
    else
    {
        if(!isValidName($_POST["userName"]))
        {
            $errors["userName"]= "*invalid";
        }
    }




    if(!empty($_POST["password"]) || !empty($_POST["newPassword"]) || !empty($_POST["newPassword"]) )
    {
        if(empty($_POST["password"]))
        {
            $errors["password"]= "*required";
        }
        else
        {
            if($_SESSION["password"] != $_POST["password"])
            {
                $errors["password"] = "*invalid";
            }
        }


        if(empty($_POST["newPassword"]))
        {
            $errors["newPassword"]= "*required";
        }
        elseif(empty($_POST["reTypePassword"]))
        {
            $errors["reTypePassword"]= "*required";
        }
        else
        {
            if($_POST["newPassword"] != $_POST["reTypePassword"])
            {
                $errors["newPassword"]= "*mismatch";
            }
        }
    }



    if(empty($_POST["email"]))
    {
        $errors["email"]= "*required";
    }
    else
    {
        if(!isValidEmail($_POST["email"]))
        {
            $errors["email"]= "*invalid";
        }
        
    }
   

    

    if( $errors["userName"] == "" && $errors["password"] == "" && $errors["newPassword"] == "" && $errors["reTypePassword"] == "" && $errors["email"] == "" )
    {
 
        require_once("../db/db.php");


        $conn = getConnection();
        if(!empty($_POST["password"]))
        {
            $sql = "UPDATE usermanagementsystem SET userName='{$_POST["userName"]}', password='{$_POST["newPassword"]}', email='{$_POST["email"]}', type='{$_POST["type"]}' WHERE id='{$_SESSION["id"]}'";
            echo $sql;
            if(mysqli_query($conn, $sql))
            {
                unset($_SESSION["errors"]);
                retrieveUser($_SESSION["id"]);
                header("Location: ../view/edit.php?msg=updated");
            }
            else
            {
                unset($_SESSION["errors"]);
                header("Location: ../view/edit.php?msg=failed");
            }
        }
        else
        {
            $sql = "UPDATE usermanagementsystem SET userName='{$_POST["userName"]}', email='{$_POST["email"]}', type='{$_POST["type"]}' WHERE id='{$_SESSION["id"]}'";
            if(mysqli_query($conn, $sql))
            {
                unset($_SESSION["errors"]);
                retrieveUser($_SESSION["id"]);
                header("Location: ../view/edit.php?msg=updated");
            }
            else
            {
                unset($_SESSION["errors"]);
                header("Location: ../view/edit.php?msg=failed");
            }

        }  

    }
    else
    {
        $_SESSION["errors"] = $errors;
        header("Location: ../view/edit.php?msg=hasError");

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


