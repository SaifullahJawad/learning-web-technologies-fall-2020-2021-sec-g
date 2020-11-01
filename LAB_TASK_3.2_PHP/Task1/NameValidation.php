
<?php


if(isset($_POST['submit']))
{
    
    if(empty($_POST["name"]))
    {
        echo "Name field is empty! Please enter your name!";
    }
    else
    {
        $name = $_POST["name"];

        if(str_word_count($name) >= 2  && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(" ", "", $name))  )
        {
            
            echo "Your name is $name";
        }
        else if(str_word_count(str_replace(".", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(".", "", $name)) && $name[strlen($name)-1] != "." )
        {
            echo "Your name is $name";
        }
        else if(str_word_count(str_replace("-", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace("-", "", $name)) && $name[strlen($name)-1] != "-" )
        {
            echo "Your name is $name";
        }
        else
        {
            echo "Invalid Name";
        }

    }
    
    
}


?>





<!DOCTYPE html>
<html>
<head>
    <title> Name Validation Page </title>
</head>
<body>

    <form method="POST">

        <table>
            
            <tr>
                <td> <label for="name"> Name </label> </td>
            </tr>

            <tr>
                <td><input type="text" id="name" name="name" ></td>
            </tr>

            <tr>
                <td> <input type="submit" name="submit" value="Submit"> </td>
            </tr>

        </table>

                


    </form>


</body>
</html>