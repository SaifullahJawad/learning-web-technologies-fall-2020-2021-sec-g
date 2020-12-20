<?php

    session_start();

    if(!isset($_SESSION["loggedInUsername"]) && !isset($_COOKIE["loggedInUsername"]))
    {
        header("Location: login.php");
    }

?>


<!DOCTYPE html>
<html>

<head>
    <title> Home </title>
</head>

<body>

    <table height="300px" width="500px" align="center" border=1 style="border-collapse: collapse;">
        <tr>
            <td align="center">
                <h1>Welcome <?php echo $_SESSION["loggedInUsername"] ?? $_COOKIE["loggedInUsername"]; ?></h1><br><br>
                <a href="register.html">Register New Employee</a><br>
                <a href="search.php">Search Employee</a><br>
                <a href="logout.php">Logout</a>
            </td>
        </tr>
    </table>

</body>

</html>