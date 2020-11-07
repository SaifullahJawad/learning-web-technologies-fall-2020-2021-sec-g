<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION["isLoggedIn"]) && !isset($_COOKIE["loggedInUserName"]))
    {
        header("Location: login.php");
    }

    if(isset($_POST["submit"]))
    {
        require_once("changedPasswordValidation.php");
    }
    else
    {

        unset($_SESSION["message"]);
    
    }



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
    </head>

    <body>

        <?php include_once("header.php"); ?>

        <tr height="400px">

            <?php include_once("dashboardSidebar.php"); ?>


            <td width="900px" align="center">

                <form action="" method="POST">
                
                
                    <fieldset style="display: inline-block;">

                        <legend>CHANGE PASSWORD</legend>
                        <table height="200px" width="600px" >

                            <tr>
                                <td>
                                    <label for="currentPassword"> Current Password:</label>
                                </td>

                                <td>
                                    <input type="password" name="currentPassword" id="currentPassword" size="30px">
                                </td>

                                <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["message"]["currentPassword"] ?? "" ; ?> </p> </td>

                            </tr>



                            <tr>

                                <td>
                                    <label for="newPassword" style="color: green;"> New Password: </label>
                                </td>

                                <td>
                                    <input type="password" name="newPassword" id="newPassword" size="30px">
                                </td>

                                <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["message"]["newPassword"] ?? "" ; ?> </p> </td>



                            </tr>



                            <tr>
                            
                            
                                <td>
                                    <label for="reTypePassword" style="color: red;"> Retype New Password: </label>
                                </td>

                                <td>
                                    <input type="password" name="reTypePassword" id="reTypePassword" size="30px">
                                </td>

                                <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["message"]["reTypePassword"] ?? "" ; ?> </p> </td>
                            
                            
                            </tr>


                            <tr height="10px"><td colspan="3"><hr></td></tr>



                            <tr height="30px">
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