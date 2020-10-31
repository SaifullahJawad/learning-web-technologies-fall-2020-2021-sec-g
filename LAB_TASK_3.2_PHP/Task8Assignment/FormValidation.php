<?php


    if(isset($_POST['submit']))
    {
        if(!isValidName($_POST["name"]))
        {
            echo "Invalid user name";
        }
        else if(!isValidEmail($_POST["email"]))
        {
            echo "Invalid email address!";
        }
        else if(!isValidGender())
        {
            echo "Gender is not selected";
        }
        else if( !isValidDOB($_POST["day"], $_POST["month"], $_POST["year"]) )
        {
            echo "Invalid date of birth!";
        }
        else if( !isValidBloodGroup($_POST["bloodGroup"]) )
        {
            echo "Blood group is not selected";
        }
        else if( !isValidDegree())
        {
            echo "Select at least one of the degrees";
        }
        else
        {
            echo "Your form has been validated successfully!";
        }

        
    }


    function isValidName( $name )
    {
        if(str_word_count($name) >= 2  && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(" ", "", $name)) )
        { 
            return true;
        }
        else if(str_word_count(str_replace(".", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(".", "", $name)))
        {
            return true;
        }
        else if(str_word_count(str_replace("-", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace("-", "", $name)))
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


        if($atSign > 0 && $email[$atSign+1] != "." && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function isValidGender()
    {
        if(isset($_POST["Genders"]))
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
            return true;
        }
        else
        {
            return false;
        }
    }


    function isValidBloodGroup( $bloodGroup )
    {
        
        if( $bloodGroup == !"")
        {
            return true;
        }
        else
        {
            return false;
        }

    }


    function isValidDegree()
    {

        if( isset($_POST["SSC"]) || isset($_POST["HSC"])|| isset($_POST["BSc"]) )
        {
            return true;
        }
        else
        {
            return false;
        }

    }



?>