<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    include('header.php');
	require_once('../db/db.php');


    if(isset($_GET["id"]))
    {
        retrieveUser($_GET["id"]);
    }


    if(($_GET["msg"] ?? "") == "failed")
    {
        echo "Failed to delete the account";
    }



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Delete Account</title>
    </head>

    <body>


        <form action="../php/deleteAction.php" method="POST">
        
                <table height="200px" width="600px">

                    <tr>

                        <td colspan="2" style="color: red;" align="center">
                            <h1>WARNING</h1>
                        </td>

                    </tr>



                    <tr>

                        <td colspan="2" style="color: red;" align="center">
                            <h2> User <?php echo $_SESSION["userName"]?> will be delete from the system!</h2>
                        </td>

                    </tr>



                    <tr height="100px">

                        <td colspan="2"  align="center" style="padding-top: 50px;">
                            Are you sure you want to delete the account?
                        </td>

                    </tr>


                    

                    <tr>

                        <td  align="right" width="200px">
                            <input type="submit" name="delete" value="Delete">
                        </td>

                        <td  style="padding-left: 10px;">
                            <a href="../view/userlist.php"> Cancel </a>
                        </td>

                    </tr>


                </table>

            
        
        
        </form>


    </body>
</html>