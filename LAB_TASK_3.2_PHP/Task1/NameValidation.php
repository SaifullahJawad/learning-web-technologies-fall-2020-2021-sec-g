
<?php


    if(isset($_POST['submit']))
    {
        $name = $_POST["name"];

        if(str_word_count($name) >= 2  && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(" ", "", $name)) )
        {
            
            echo "Valid";
        }
        else if(str_word_count(str_replace(".", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(".", "", $name)))
        {
            echo "Valid";
        }
        else if(str_word_count(str_replace("-", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace("-", "", $name)))
        {
            echo "Valid";
        }
        else
        {
            echo "Invalid";
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
                    <td><input type="text" id="name" name="name" required ></td>
                </tr>

                <tr>
                    <td> <input type="submit" name="submit" value="Submit"> </td>
                </tr>

            </table>

                       


        </form>
    

    </body>
</html>