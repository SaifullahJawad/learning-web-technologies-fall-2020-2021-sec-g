<?php

    if(!isset($_POST["delete"]))
    {

        header("HTTP/1.0 404 Not Found");
        exit(); 

    }


    if(!isset($_SESSION))
    {
        session_start();
    }


    require_once("../db/db.php");
    $conn = getConnection();
    $id = $_SESSION["id"];

    $sql = "DELETE FROM usermanagementsystem WHERE id='$id'";
    
    if(mysqli_query($conn, $sql))
    {
        unset($_SESSION["errors"]);
        freeUserSession();
        header("Location: ../view/userlist.php?msg=deleted");
    }
    else
    {
        unset($_SESSION["errors"]);
        header("Location: ../view/delete.php?msg=failed");
    }



?>