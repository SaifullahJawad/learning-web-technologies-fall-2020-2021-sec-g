<?php


if(isset($_POST['submit']))
{

    if( !isset($_POST["SSC"]) && !isset($_POST["HSC"]) && !isset($_POST["BSc"]) )
    {
        echo "None of the degrees is selected. Select your degree";
    }
    else
    {
        
        if( isset($_POST["SSC"]) && !isset($_POST["HSC"]) && !isset($_POST["BSc"]))
        {
            echo "You have completed SSC";
        }
        else if( !isset($_POST["SSC"]) && isset($_POST["HSC"]) && !isset($_POST["BSc"]))
        {
            echo "You have completed HSC";
        }
        else if( !isset($_POST["SSC"]) && !isset($_POST["HSC"]) && isset($_POST["BSc"]))
        {
            echo "You have completed BSc";
        }
        else if( isset($_POST["SSC"]) && isset($_POST["HSC"]) && !isset($_POST["BSc"]))
        {
            echo "You have completed SSC and HSC";
        }
        else if( isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["BSc"]))
        {
            echo "You have completed SSC, HSC and BSc";
        }
        else if( !isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["BSc"]))
        {
            echo "You have completed HSC and BSc";
        }
        else
        {
            echo "You have completed SSC and BSc";
        }
        
        
    }
    
}


?>





<!DOCTYPE html>
<html>
    <head>
        <title> Degree Validation </title>
    </head>
    <body>

        <form method="POST">

            <fieldset style="display: inline-block;">

                <legend> Degree </legend>
                <input type="checkbox" name="SSC" value="SSC" id="Degree1">
                <label for="Degree1"> SSC </label>
                <input type="checkbox" name="HSC" value="HSC" id="Degree2">
                <label for="Degree2"> HSC </label>
                <input type="checkbox" name="BSc" value="BSc" id="Degree3">
                <label for="Degree3"> BSc </label><br>

            </fieldset>
            <br>
            <input type="submit" name="submit" value="Submit">

        </form>


    </body>
</html>