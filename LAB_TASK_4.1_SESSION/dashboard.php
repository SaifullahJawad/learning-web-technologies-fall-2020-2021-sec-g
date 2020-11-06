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

            <?php include_once("dashboardSidebar.php"); ?>

            <td width="900px">
                <h1 style="padding-bottom: 300px; padding-left:15px">Welcome <?php echo $_SESSION["name"]; ?></h1>
            </td>
            
        </tr>

        <?php include_once("footer.php"); ?>


    </body>
</html>