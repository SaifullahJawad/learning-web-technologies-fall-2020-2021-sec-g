<?php


if(isset($_POST['submit']))
{

    if($_POST["bloodGroup"] == "")
    {
        echo "Blood group is not selected. Select your blood group!";
    }
    else
    {
        echo "Blood group is selected";
    }
    
}


?>





<!DOCTYPE html>
<html>
    <head>
        <title> DOB Validation </title>
    </head>
    <body>

        <form method="POST">

            <table>

                <tr align = "center">

                    <td> <label for="bloodGroups"> Blood Group </label> </td>

                    <td> 
                        <select name="bloodGroup" id="bloodGroups">
                            <option value=""></option>
                            <option value="A+"> A+ </option>
                            <option value="A-"> A- </option>
                            <option value="B+"> B+ </option>
                            <option value="B-"> B- </option>
                            <option value="AB+"> AB+ </option>
                            <option value="AB-"> AB- </option>
                            <option value="O+"> O+ </option>
                            <option value="O-"> O- </option>
                        </select> 
                    </td>
                    

                </tr>

                <tr>
                    <td colspan="2"> <hr> </td>
                </tr>

                <tr>
                    <td colspan = "2"> <input type="submit" name="submit" value="Submit"> </td>
                </tr>

            </table>    

        

        </form>


    </body>
</html>