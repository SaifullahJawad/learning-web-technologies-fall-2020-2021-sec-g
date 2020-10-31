<?php


if(isset($_POST['submit']))
{

    if($_POST["day"] >= 1 && $_POST["day"] <=31 && $_POST["month"] >= 1 && $_POST["month"] <= 12 && $_POST["year"] >= 1900 && $_POST["year"] <= 2016)
    {
        echo "Valid DOB";
    }
    else
    {
        echo "Invalid DOB";
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

            <fieldset style="display: inline-block;">

                <legend> Date of Birth </legend>

                <table>

                    <tr align = "center">

                        <td> dd </td>
                        <td> mm </td>
                        <td> yyyy </td>

                    </tr>

                    <tr align = "center">

                        <td> <input type="text" name="day" size="1" required> <strong><big>/</big></strong> </td>
                        <td> <input type="text" name="month" size="1" required> <strong><big>/</big></strong> </td>
                        <td> <input type="text" name="year" size="1" required> </td>   

                    </tr>

                    <tr>
                        <td colspan = "3"> <hr> <input type="submit" name="submit" value="Submit"> </td>
                    </tr>

                </table>    

            </fieldset>
        

        </form>


    </body>
</html>