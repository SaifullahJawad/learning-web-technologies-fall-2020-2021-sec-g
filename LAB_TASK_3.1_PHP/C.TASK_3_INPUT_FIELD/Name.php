
<?php


if(isset($_POST['submit']))
{
    $userName = $_POST['userName'];
    echo $userName;
}


?>



<!DOCTYPE html>
<html>
<head>
    <title> NameFrom </title>
</head>
<body>

    <form method="POST">

        <fieldset style="display: inline-block;">
            <legend> NAME </legend>
            <label for="userName"> User Name: </label>
            <input type="text" id="userName" name="userName" value="
                                                                    <?php


                                                                        if(isset($_POST['submit']))
                                                                        {
                                                                            $userName = $_POST['userName'];
                                                                            echo $userName;
                                                                        }


                                                                    ?>">
            <hr>
            <input type="submit" name="submit" value="Submit">

        </fieldset>



    </form>
    
</body>
</html>
