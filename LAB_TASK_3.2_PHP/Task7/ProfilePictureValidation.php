<?php


if(isset($_POST['submit']))
{

   if($_POST["userId"] >= 0)
   {
        echo "Valid input";
   }
   else
   {
       echo "User ID cannot be negative";
   }
    
}


?>





<!DOCTYPE html>
<html>
    <head>
        <title> Profile Picture Validation </title>
    </head>
    <body>

        <form method="POST">

            <fieldset style="display: inline-block;">

                <legend> Profile Picture </legend>

                <table>

                    <tr>

                        <td> <label for="userId"> User Id </label> </td>
                        <td> <input type="text" name="userId" id="userId" required> </td>

                    </tr>

                    <tr height="40px">

                        <td> <label for="picture"> Picture </label> </td>
                        <td> <input type="file" name="picture" id="picture"  required> </td>   

                    </tr>

                    <tr>
                        <td colspan = "2"> <hr> <input type="submit" name="submit" value="Submit"> </td>
                    </tr>

                </table>    

            </fieldset>
        

        </form>


    </body>
</html>