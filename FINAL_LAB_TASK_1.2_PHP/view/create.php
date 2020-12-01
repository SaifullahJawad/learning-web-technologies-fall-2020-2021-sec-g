<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    include('header.php');


    if(($_GET["msg"] ?? "") != "hasError")
    {
        unset($_SESSION["errors"]);    
        unset($_SESSION["previousInput"]);    
    }



    if(($_GET["msg"] ?? "") == "failed")
    {
        echo "Failed to create an user";
    }


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Create User</title>
    </head>

    <body>


                <form action="../php/createValidation.php" method="POST">
                
                
                    <fieldset style="display: inline-block;">

                        <legend>CREATE AN USER</legend>
                        <table width= "500px" height="350px" >

                            <tr height="30px">
                                <td>
                                    <label for="userName"> Name</label>:
                                </td>

                                <td>
                                    <input type="text" name="userName" id="userName" size="30px" value="<?php echo $_SESSION["previousInput"]["userName"] ?? "";?>">
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["userName"] ?? "" ; ?> </td>

                            
                            </tr>


                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>



                            <tr height="30px">

                                <td>
                                    <label for="password">Password</label>
                                </td>

                                <td>
                                    <input type="password" name="password" id="password" size="30px" value="<?php echo $_SESSION["previousInput"]["password"] ?? "";?>">
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["password"] ?? "" ; ?> </td>


                            </tr>





                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>




                            <tr height="30px">

                                <td>
                                    <label for="confirmPassword">Confirm Password</label>
                                </td>

                                <td>
                                    <input type="password" name="confirmPassword" id="confirmPassword" size="30px" value="<?php echo $_SESSION["previousInput"]["confirmPassword"] ?? "";?>">
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["confirmPassword"] ?? "" ; ?> </td>


                            </tr>




                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>







                            <tr height="30px">

                                <td>
                                    <label for="email">Email</label>
                                </td>

                                <td>
                                    <input type="text" name="email" id="email" size="30px" value="<?php echo $_SESSION["previousInput"]["email"] ?? "";?>" >
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
                                    <input type="radio" name="type" value="admin" <?php if(($_SESSION["previousInput"]["type"] ?? "") == "admin") { echo "checked" ;} ?> id="option1">
                                    <label for="option1"> Admin </label>
                                    <input type="radio" name="type" value="user" <?php if(($_SESSION["previousInput"]["type"] ?? "") == "user") { echo "checked" ;} ?> id="option2">
                                    <label for="option2"> User </label>
                                    
                                </td>

                                <td width = "150px" style="color: red;"> <?php echo $_SESSION["errors"]["type"] ?? "" ; ?> </td>


                            </tr>




                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>



                            <tr height="30px">
                                <td colspan="3">
                                    <input type="submit" name="create" value="Create">
                                </td> 
                            </tr>



                        </table>

                    </fieldset>
                    
                
                
                </form>



    </body>
</html>