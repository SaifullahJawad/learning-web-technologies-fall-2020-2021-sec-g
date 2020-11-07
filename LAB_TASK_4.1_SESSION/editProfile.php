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
        require_once("profileUpdateValidation.php");
    }
    else
    {
        unset($_SESSION["errors"]);
       
    }



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
    </head>

    <body>

        <?php include_once("header.php"); ?>

        <tr height="400px">

            <?php include_once("dashboardSidebar.php"); ?>


            <td width="900px" align="center">

                <form action="editProfile.php" method="POST">
                
                
                    <fieldset style="display: inline-block;">

                        <legend>PROFILE</legend>
                        <table width= "500px" height="350px" >

                            <tr height="30px">
                                <td>
                                    <label for="name"> Name</label>:
                                </td>

                                <td>
                                    <input type="text" name="name" id="name" size="30px" value="<?php echo $_SESSION["name"];?>">
                                </td>

                                <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["name"] ?? "" ; ?> </p> </td>

                            
                            </tr>


                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>



                            <tr height="30px">

                                <td>
                                    <label for="email">Email</label>
                                </td>

                                <td>
                                    <input type="text" name="email" id="email" size="30px" value="<?php echo $_SESSION["email"];?>">
                                </td>

                                <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["email"] ?? "" ; ?> </p> </td>


                            </tr>



                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>

                    

                            <tr height="30px">

                                <td>
                                    Genders
                                </td>

                                <td>
                                    <input type="radio" name="genders" value="Male" <?php if($_SESSION["genders"] == "Male") { echo "checked" ;} ?> id="genderOption1">
                                    <label for="genderOption1"> Male </label>
                                    <input type="radio" name="genders" value="Female" <?php if($_SESSION["genders"] == "Female") { echo "checked" ;} ?> id="genderOption2">
                                    <label for="genderOption2"> Female </label>
                                    <input type="radio" name="genders" value="Other" <?php if($_SESSION["genders"] == "Other") { echo "checked" ;} ?> id="genderOption3">
                                    <label for="genderOption3"> Other </label>
                                </td>

                                <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["genders"] ?? "" ; ?> </p> </td>


                            </tr>


                            <tr height="10px">
                                <td colspan="3"><hr></td> 
                            </tr>



                            <tr height="30px">

                                <td style="padding-bottom: 20px">
                                    <label for="dob"> Date of Birth</label>
                                </td>

                                <td>
                                    <input type="text" name="dob" id="dob" size="30px" value="<?php echo $_SESSION["dob"];?>"><br>
                                    (dd/mm/yyyy) 
                                </td>
                                
                                <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["dob"] ?? "" ; ?> </p> </td>
                                

                            </tr>


                            <tr height="10px">
                                <td colspan="3"><hr></td> 
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