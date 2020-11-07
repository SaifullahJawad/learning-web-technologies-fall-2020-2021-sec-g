<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    if(isset($_SESSION["isLoggedIn"]) || isset($_COOKIE["loggedInUserName"]) )
    {
        header("Location: dashboard.php");
    }

    $errors = ["userName" => "", "password" => ""];
    $previousInput = "";



    if(isset($_POST["submit"]))
    {

        if(empty($_POST["userName"]))
        {
            $errors["userName"] = "*required";
        }
        else
        {
            $previousInput = $_POST["userName"];
        }


        if(empty($_POST["password"]))
        {
            $errors["password"] = "*required";
        }


        if(!empty($_POST["userName"]) && !empty($_POST["password"]) )
        {

           
            if( ($_SESSION["userName"] ?? "") == $_POST["userName"] && ($_SESSION["password"] ?? "") == $_POST["password"] )
            {
                if(isset($_POST["rememberMe"]))
                {
                    setcookie("loggedInUserName", $_SESSION["userName"], time()+ 3600);
                    header("Location: dashboard.php");
                }
                else
                {
                    $_SESSION["isLoggedIn"] = true;
                    $_SESSION["loggedInUserName"] = $_SESSION["userName"];
                    header("Location: dashboard.php");
                }
            }
            else
            {
                $errors["userName"] = "Invalid User Name or Password";
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
                        
                        <legend>LOGIN</legend>
                        <table width="500px">


                            <tr>

                                <td align="right" width="100px">

                                    <label for="userName"> User Name: </label>

                                </td>

                                <td>

                                    <input type="text" name="userName" id="userName" value="<?php echo $previousInput;?>">
                                
                                </td>

                                <td width="300px"> <p style="color: red;"> <?php echo $errors["userName"];?> </p> </td>

                            </tr>


                            <tr>
                            
                                <td align="right">
                                    <label for="password"> Password: </label>
                                </td>

                                <td>
                                
                                    <input type="password" name="password" id="password">

                                </td>

                                <td width="300px"> <p style="color: red;"> <?php echo $errors["password"];?> </p> </td>
                            
                            </tr>


                            <tr>

                                <td colspan="3"> <hr> </td>

                            </tr>


                            <tr>
                            
                                <td colspan="3">

                                    <input type="checkbox" name="rememberMe" value="SSC" id="rememberMe">
                                    <label for="rememberMe"> Remember Me </label>

                                </td>

                            </tr>


                            <tr>
                                <td colspan="3">
                                    <input type="submit" name="submit" value="Submit">
                                    <a href="forgotPassword.php"> Forgot Password? </a>
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

