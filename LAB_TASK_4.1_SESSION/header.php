<?php

    if (realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ))
    {
        exit();   

    }

    if(!isset($_SESSION))
    {
        session_start();
    }
?>



    



<body>
    <table border="1" style="border-collapse: collapse;" width = "100%">

    <tr height="100px">

        <td align="left" style="border:0px"> <img src="img/logo.png"> </td>
        <td style="border:0px" align="right"> 
        <?php

            if( isset($_SESSION["isLoggedIn"]) || isset($_COOKIE["loggedInUserName"]))
            {
        ?>
                Logged in as <a href="dashboard.php"> <?php if(isset($_COOKIE["loggedInUserName"])){echo $_COOKIE["loggedInUserName"];}else{echo $_SESSION["loggedInUserName"];} ?> </a> |
                <a href="logout.php"> Logout </a>

        <?php
            }
            else
            {
        ?>
                <a href="publicHome.php"> Home </a> |
                <a href="logIn.php"> Login </a> |
                <a href="registration.php"> Registration </a>
                
        <?php
            }
        
        ?>
        </td>

    </tr>