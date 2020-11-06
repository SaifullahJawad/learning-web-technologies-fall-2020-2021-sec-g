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
        <title>Dashboard</title>
    </head>

    <body>

        <?php include_once("header.php"); ?>

        <tr height="400px">

            <td width="270px">
                
                <table style="padding-left: 15px; padding-bottom: 150px" width="100%">


                    <tr>
                        <td>
                            <h2>Account</h2>
                            <hr>
                        </td>
                    </tr>



                    <tr>
                        <td>

                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="">View Profile</a></li>
                                <li><a href="">Edit Profile</a></li>
                                <li><a href="">Change Profile Picture</a></li>
                                <li><a href="">Change Password</a></li>
                                <li><a href="logOut.php">Logout</a></li>
                            </ul>

                        </td>
                        
                    </tr>


                </table>

            </td>

            <td width="900px">
                <h1 style="padding-bottom: 300px; padding-left:15px">Welcome <?php echo $_SESSION["name"]; ?></h1>
            </td>
        </tr>

        <?php include_once("footer.php"); ?>


    </body>
</html>