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
        <title>My Profile</title>
    </head>

    <body>

        <?php include_once("header.php"); ?>

        <tr height="400px">

            <?php include_once("dashboardSidebar.php"); ?>


            <td width="900px" align="center">

                <!-- style="padding-bottom: 300px; padding-left:15px" -->
                <fieldset style="display: inline-block;">
                    <legend>PROFILE</legend>
                    <table >

                        <tr height="30px">
                            <td>
                                Name:
                            </td>

                            <td>
                                <?php echo $_SESSION["name"];?>
                            </td>

                            <td width="250px" rowspan="6" valign="bottom">

                                <img src="img/user.png" alt="" width="200px" height="200px">
                                

                            </td>
                        </tr>


                        <tr height="10px">
                            <td colspan="2"><hr></td> 
                        </tr>



                        <tr height="30px">

                            <td>
                                Email:
                            </td>

                            <td>
                                <?php echo $_SESSION["email"];?>
                            </td>


                        </tr>



                        <tr height="10px">
                            <td colspan="2"><hr></td> 
                        </tr>

                

                        <tr height="30px">

                            <td>
                                Gender:
                            </td>

                            <td>
                                <?php echo $_SESSION["genders"];?>
                            </td>


                        </tr>


                        <tr height="10px">
                            <td colspan="2"><hr></td> 
                        </tr>



                        <tr height="30px">

                            <td>
                                Date of Birth:
                            </td>

                            <td>
                                <?php echo $_SESSION["dob"];?>
                            </td>

                            <td style="padding-left: 70px">
                                <a href="">Change</a> 
                            </td>

                        </tr>


                        <tr height="10px">
                            <td colspan="3"><hr></td> 
                        </tr>



                        <tr height="30px">
                            <td colspan="3"><a href="">Edit Profile</a></td> 
                        </tr>



                    </table>
                </fieldset>


                
            </td>
            
        </tr>

        <?php include_once("footer.php"); ?>


    </body>
</html>