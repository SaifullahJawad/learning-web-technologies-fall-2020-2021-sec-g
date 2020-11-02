<?php


if(isset($_POST['submit']))
{
    $email = $_POST["email"];
    $atSign = strpos($email, "@");
    $lastDot = strripos($email, ".");


    if(!empty($_POST["email"]))
    {
        if($atSign > 0 && $email[$atSign+1] != "." && substr_count($email, "@") == 1 && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
        {
            echo "Your email is $email";
        }
        else
        {
            echo "Invalid email!";
        }

    }
    else
    {
        echo "Email field is empty! Please enter your email!";
    }
    

    
}


?>





<!DOCTYPE html>
<html>
<head>
    <title> Email Validation Page </title>
</head>
    <body>

        <form method="POST">

            <table>
                
                <tr>
                    <td> <label for="email"> Email </label> </td>
                </tr>

                <tr>
                    <td><input type="text" id="email" name="email" ></td>
                </tr>

                <tr>
                    <td> <input type="submit" name="submit" value="Submit"> </td>
                </tr>

            </table>

                    


        </form>


    </body>
</html>