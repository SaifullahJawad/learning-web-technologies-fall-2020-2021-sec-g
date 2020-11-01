<?php


if(isset($_POST['submit']))
{

    if(!isset($_POST["Genders"]))
    {
        echo "None of the genders is selected. Select your gender";
    }
    else
    {
        echo "Your gender is {$_POST["Genders"]}";
    }

    
}


?>





<!DOCTYPE html>
<html>
    <head>
        <title> Radio Button Validation </title>
    </head>
    <body>

        <form method="POST">

            <fieldset style="display: inline-block;">

                <legend> Gender </legend>
                <input type="radio" name="Genders" value="Male" id="genderOption1">
                <label for="genderOption1"> Male </label>
                <input type="radio" name="Genders" value="Female" id="genderOption2">
                <label for="genderOption2"> Female </label>
                <input type="radio" name="Genders" value="Others" id="genderOption3">
                <label for="genderOption3"> Others </label><br>

            </fieldset>
            <br>
            <input type="submit" name="submit" value="Submit">

        </form>


    </body>
</html>