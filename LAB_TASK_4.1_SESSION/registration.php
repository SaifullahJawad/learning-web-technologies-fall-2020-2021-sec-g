<?php

    
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(isset($_SESSION["isLoggedIn"]))
    {
        header("Location: dashboard.php");
    }

    if(isset($_POST["submit"]))
    {
        require_once("registrationValidation.php");
    }
    else
    {
        
        unset($_SESSION["previousInput"]);
        unset($_SESSION["errors"]);
       
    }
    
    
    


?>











<!DOCTYPE html>
<html>
    <head>
        <title> Registration </title>
    </head>
    <body>
            <?php include_once "header.php" ?>
            <tr>


                <td align="Center" colspan="2"> 

                    <form action="registration.php" method="POST">

                        <fieldset style="display: inline-block;" >

                            <legend>Registraion</legend>


                            <table align="center"  width="700px">

                                
                    
                                <tr height="40px">
                    
                                    <td style="padding-left: 5px;"> <label for="name"> Name </td>
                                    <td style="padding-left: 5px;"> <input type="text" id="name" name="name" value= "<?php echo $_SESSION["previousInput"]["name"] ?? ""; ?>" > </td>
                                    <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["name"] ?? "" ; ?> </p> </td>

                                        
                                    
                    
                                </tr>



                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>


                    
                                <tr height = "40px">
                    
                                    <td style="padding-left: 5px;"> <label for="email"> Email </label> </td>
                                    <td style="padding-left: 5px;"> <input type="text" id="email" name="email" value= "<?php echo $_SESSION["previousInput"]["email"] ?? "" ;?>" > </td>
                                    <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["email"] ?? "" ; ?> </p> </td>
                                   
                                </tr>


                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>


                                <tr height = "40px">

                                    <td style="padding-left: 5px;"> <label for="userName"> User Name: </td>
                                    <td style="padding-left: 5px;"> <input type="text" id="userName" name="userName" value= "<?php echo $_SESSION["previousInput"]["userName"] ?? ""; ?>" > </td>
                                    <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["userName"] ?? "" ; ?> </p> </td>

                                </tr>



                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>



                                <tr height = "40px">

                                    <td style="padding-left: 5px;"> <label for="password"> Password: </td>
                                    <td style="padding-left: 5px;"> <input type="password" id="password" name="password" value= "<?php echo $_SESSION["previousInput"]["password"] ?? ""; ?>" > </td>
                                    <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["password"] ?? "" ; ?> </p> </td>

                                </tr>


                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>


                                <tr height = "40px">

                                    <td style="padding-left: 5px;"> <label for="confirmPassword"> Confirm Password </td>
                                    <td style="padding-left: 5px;"> <input type="password" id="confirmPassword" name="confirmPassword" value= "<?php echo $_SESSION["previousInput"]["confirmPassword"] ?? ""; ?>" > </td>
                                    <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["confirmPassword"] ?? "" ; ?> </p> </td>

                                </tr>


                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>





                    
                                <tr height = 40px>
                    
                                    <td style="padding-left: 5px;" colspan="2">
                                        
                                        <fieldset>

                                        
                                         
                                        

                                            <legend>Gender</legend>
                                            <?php $genderOption = $_SESSION["previousInput"]["genders"] ?? ""; ?>
                                            <input type="radio" name="genders" value="Male" <?php if($genderOption == "Male") { echo "checked" ;} ?> id="genderOption1">
                                            <label for="genderOption1"> Male </label>
                                            <input type="radio" name="genders" value="Female" <?php if($genderOption == "Female") { echo "checked" ;} ?> id="genderOption2">
                                            <label for="genderOption2"> Female </label>
                                            <input type="radio" name="genders" value="Other" <?php if($genderOption == "Other") { echo "checked" ;} ?> id="genderOption3">
                                            <label for="genderOption3"> Other </label>

                                        </fieldset>

                                    </td>

                                    <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["genders"] ?? "" ; ?> </p> </td>
                    
                                    
                                </tr>


                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>


                                
                    


                                <tr height = 40px>
                    
                    
                                    <td style="padding-left: 5px;" colspan="2"> 

                                        <fieldset>

                                            <legend>Date of Birth</legend>
                                            <input type="text" name="day" value= "<?php echo $_SESSION["previousInput"]["day"] ?? ""; ?>" size="1" > <strong><big>/</big></strong>
                                            <input type="text" name="month" size="1" value= "<?php echo $_SESSION["previousInput"]["month"] ?? ""; ?>" > <strong><big>/</big></strong>
                                            <input type="text" name="year" value= "<?php echo $_SESSION["previousInput"]["year"] ?? ""; ?>" size="2" > 
                                            <label> (dd/mm/yyyy) </label>

                                        </fieldset>
                            
                                    </td>

                                    <td width = "150px"> <p style="color: red;"> <?php echo $_SESSION["errors"]["dob"] ?? "" ; ?> </p> </td>
                    
                    
                                </tr>


                                <tr>
                                    <td colspan="3"> <hr> </td>
                                </tr>


                    
                    
                                <tr>
                    
                                    <td colspan="3" align="left">
                                        <input type="submit" name="submit" value="Submit">
                                        <input type="reset" name="reset" value="Reset">
                                    </td>
                    
                                </tr>
                            
                    
                            </table>



                        </fieldset>


                    </form>
                                    
                </td>


            </tr>

            <?php include_once "footer.php" ?>

        
    </body>
</html>