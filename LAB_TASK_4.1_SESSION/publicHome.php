<?php

    if(isset($_SESSION["isLoggedIn"]) || isset($_COOKIE["loggedInUserName"]) )
    {
        header("Location: dashboard.php");
    }

    

?>



<!DOCTYPE html>
<html>
    <head>
        <title> Public Home </title>
    </head>



            <?php include_once "header.php"; ?>
            <tr height="400px">
                <td colspan="2"> <h1> Welcome to xCompany </h1> </td>
            </tr>
            <?php include_once "footer.php"; ?>

            
</html>