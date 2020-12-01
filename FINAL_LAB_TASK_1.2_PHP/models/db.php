<?php


    // if (realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ))
    // {
    //     header("HTTP/1.0 404 Not Found");
    //     exit();   

    // }


    function getConnection()
    {
        $conn = mysqli_connect("localhost", "root", "", "job_portal");

        if(!$conn)
        {
            die("Connection error:". mysqli_connect_error());
        }
        else
        {
            return $conn;
        }

    }
    


?>