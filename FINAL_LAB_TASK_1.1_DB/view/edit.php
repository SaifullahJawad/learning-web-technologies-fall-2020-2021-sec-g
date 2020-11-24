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



    if(($_GET["msg"] ?? "") != "hasError")
    {
        unset($_SESSION["errors"]);    
    }

    if(($_GET["msg"] ?? "") == "updated")
    {
        echo "Profile has been updated";
    }


    if(($_GET["msg"] ?? "") == "failed")
    {
        echo "Failed updated";
    }


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
    </head>

    <body>


                <form action="../php/editValidation.php" method="POST">
                
                
                    <fieldset style="display: inline-block;">

                        <legend>EDIT USER</legend>
                        <table width= "500px" height="350px" >

                            <tr height="30px">
                                <td>
                                    <label for="userName"> Name</label>:
                                </td>

                                <td>
                                    <input type="text" name="userName" id="userName" size="30px" value="<?php echo $_SESSION["userName"];?>">
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["userName"] ?? "" ; ?> </td>

                            
                            </tr>


                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>



                            <tr height="30px">

                                <td>
                                    <label for="password">Current Password</label>
                                </td>

                                <td>
                                    <input type="password" name="password" id="password" size="30px">
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["password"] ?? "" ; ?> </td>


                            </tr>





                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>




                            <tr height="30px">

                                <td>
                                    <label for="newPassword">New Password</label>
                                </td>

                                <td>
                                    <input type="password" name="newPassword" id="newPassword" size="30px">
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["newPassword"] ?? "" ; ?> </td>


                            </tr>




                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>




                            <tr height="30px">

                                <td>
                                    <label for="reTypePassword">Re-Type Password</label>
                                </td>

                                <td>
                                    <input type="password" name="reTypePassword" id="reTypePassword" size="30px">
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["reTypePassword"] ?? "" ; ?> </td>


                            </tr>


                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>



                            <tr height="30px">

                                <td>
                                    <label for="email">Email</label>
                                </td>

                                <td>
                                    <input type="text" name="email" id="email" size="30px" value="<?php echo $_SESSION["email"];?>" >
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["email"] ?? "" ; ?> </td>


                            </tr>







                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>

                    

                            <tr height="30px">

                                <td>
                                    User Type
                                </td>

                                <td>
                                    <input type="radio" name="type" value="admin" <?php if($_SESSION["type"]== "admin") { echo "checked" ;} ?> id="option1">
                                    <label for="option1"> Admin </label>
                                    <input type="radio" name="type" value="user" <?php if($_SESSION["type"] == "user") { echo "checked" ;} ?> id="option2">
                                    <label for="option2"> User </label>
                                    
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["type"] ?? "" ; ?> </td>


                            </tr>




                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>



                            <tr height="30px">
                                <td colspan="3">
                                    <input type="submit" name="update" value="Update">
                                </td> 
                            </tr>



                        </table>

                    </fieldset>
                    
                
                
                </form>



    </body>
</html>