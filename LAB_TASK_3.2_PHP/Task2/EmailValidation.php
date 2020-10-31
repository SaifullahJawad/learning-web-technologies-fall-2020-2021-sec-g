
<?php


if(isset($_POST['submit']))
{
    $email = $_POST["email"];
    $atSign = strpos($email, "@");
    $lastDot = strripos($email, ".");


    if($atSign > 0 && $email[$atSign+1] != "." && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
    {
        echo "Valid email!";
    }
    else
    {
        echo "Invalid email!";
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
                    <td><input type="text" id="email" name="email" required ></td>
                </tr>

                <tr>
                    <td> <input type="submit" name="submit" value="Submit"> </td>
                </tr>

            </table>

                    


        </form>


    </body>
</html>