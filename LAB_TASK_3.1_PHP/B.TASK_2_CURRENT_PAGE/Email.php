<?php


    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        echo $email;
    }


?>




<!DOCTYPE html>
<html>
<head>
    <title> EmailForm </title>
</head>
<body>

    <form method="POST">

        <fieldset style="display: inline-block;">
            <legend> Email </legend>
            <label for="email"> Email: </label>
            <input type="email" id="email" name="email">
            <hr>
            <input type="submit" name="submit" value="Submit">

        </fieldset>



    </form>
    
</body>
</html>