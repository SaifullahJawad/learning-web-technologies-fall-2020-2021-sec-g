<?php

    require_once("database.php");

    if(isset($_POST["email"]))
    {
        if(checkEmailUniqueness($_POST["email"]))
        {
            echo "exists";
        }
        else
            echo "non-existant";
        
    }

?>