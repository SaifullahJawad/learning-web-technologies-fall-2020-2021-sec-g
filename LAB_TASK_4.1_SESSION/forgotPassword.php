<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    $errors = ["email" => ""];
    $previousInput = "";


    if(isset($_POST["submit"]))
    {
        if(empty($_POST["email"]))
        {
            $errors["email"] = "*required";
        }
        else
        {
            $previousInput = $_POST["email"];
            if( ($_SESSION["email"] ?? "") == $_POST["email"] )
            {
                
                $_SESSION["isLoggedIn"] = true;
                $_SESSION["loggedInUserName"] = $_SESSION["userName"];
                header("Location: dashboard.php");

            }
            else
            {
                $errors["email"] = "Invalid Email";
            }
        }
    }


    


?>




<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
    </head>

    <body>

        <?php include_once("header.php"); ?>

        

        <tr>

            <td colspan="2" align="center" style="padding: 100px">
                
                <form action="" method="POST">

                    <fieldset style="display: inline-block;">
                        
                        <legend>FORGOT PASSWORD</legend>
                        <table width="500px">


                            <tr>

                                <td align="right" width="100px">

                                    <label for="email"> Email: </label>

                                </td>

                                <td>

                                    <input type="text" name="email" id="email" value="<?php echo $previousInput??"";?>">
                                
                                </td>

                                <td width="300px"> <p style="color: red;"> <?php echo $errors["email"]?? "";?> </p> </td>

                            </tr>


                            <tr>

                                <td colspan="3"> <hr> </td>

                            </tr>




                            <tr>
                                <td colspan="3">
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>



                        </table>

                    </fieldset>


                </form>
        
            </td>

        </tr>


        

        <?php include_once("footer.php"); ?>




    </body>
</html>