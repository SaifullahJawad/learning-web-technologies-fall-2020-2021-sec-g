<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION["isLoggedIn"]) && !isset($_COOKIE["loggedInUserName"]))
    {
        header("Location: login.php");
    }



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Profile Picture</title>
    </head>

    <body>

        <?php include_once("header.php"); ?>

        <tr height="400px">

            <?php include_once("dashboardSidebar.php"); ?>


            <td width="900px" align="center">

                <form action="" method="POST">
                
                
                    <fieldset style="display: inline-block;">

                        <legend>PROFILE PICTURE</legend>
                        <table width= "500px" height="350px" >

                            <tr>
                                <td valign="bottom">
                                    <img src="img/user.png" alt="" width="200px" height="200px">
                                </td>

                            </tr>



                            <tr>

                                <td height=30px>
                                    <input type="file" name="profilePicture">
                                </td>



                            </tr>



                            <tr height="10px">
                                <td><hr></td> 
                            </tr>



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