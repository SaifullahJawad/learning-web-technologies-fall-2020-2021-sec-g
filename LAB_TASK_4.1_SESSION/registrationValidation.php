<?php


    if(!isset($_POST["submit"]))
    {

        header( "Location: registration.php" );

    }


    if(!isset($_SESSION))
    {
        session_start();
    }


    $errors = ["name" => "", "email" => "", "userName" => "", "password" => "", "confirmPassword" => "", "genders" => "", "dob" => ""];
    $previousInput = ["name" => "", "email" => "", "userName" => "", "password" => "", "confirmPassword" => "", "genders" => "", "day" => "", "month" => "", "year" => ""];
    
    



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



    if(empty($_POST["userName"]))
    {
        $errors["userName"] = "*required";
    }
    else
    {
        $previousInput["userName"] = $_POST["userName"];
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



    if( !isset($_POST["genders"]) )
    {
        $errors["genders"] = "*required";
    }
    else
    {
        $previousInput["genders"] = $_POST["genders"];
    }



    if(empty($_POST["day"]) && empty($_POST["month"]) && empty($_POST["year"]))
    {
        $errors["dob"] = "*required";
    }
    else
    {
        $previousInput["day"] = $_POST["day"];
        $previousInput["month"] = $_POST["month"];
        $previousInput["year"] = $_POST["year"];
        if(!isValidDOB($_POST["day"], $_POST["month"], $_POST["year"]))
        {
            $errors["dob"] = "*invalid";
        }

    }

   

    

    if( $errors["name"] == "" && $errors["email"] == "" && $errors["userName"] == "" && $errors["password"] == "" && $errors["genders"] == "" && $errors["dob"] == "" )
    {
        
        setcookie("name", $_POST["name"], time()+3600);
        setcookie("email", $_POST["email"], time()+3600);
        setcookie("userName", $_POST["userName"], time()+3600);
        setcookie("password", $_POST["password"], time()+3600);
        setcookie("genders", $_POST["genders"], time()+3600);
        setcookie("dobDay", $_POST["day"], time()+3600);
        setcookie("dobMonth", $_POST["month"], time()+3600);
        setcookie("dobYear", $_POST["year"], time()+3600);

        header("Location: logIn.php");
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



    function isValidDOB($day, $month, $year)
    {


        if( $day >= 1 && $day <=31 && $month >= 1 && $month <= 12 && $year >= 1900 && $year <= 2016)
        {

            if( ($month == 4 || $month == 6 ||  $month == 9 || $month == 11 ) && $day <= 30 )
            {
                return true;
                
            }
            else if( ($month == 1 || $month == 3 ||  $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12 ) && $day <= 31 )
            {
                return true;

            }
            else if( $month == 2 && $day <= 28 )
            {
                return true;

            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }


    }









    

?>


