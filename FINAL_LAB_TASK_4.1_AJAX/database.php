<?php


    if (realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ))
    {
        header("HTTP/1.0 404 Not Found");
        exit();   

    }


    function getConnection()
    {
        $conn = mysqli_connect("localhost", "root", "", "lab_task");

        if(!$conn)
        {
            die("Connection error:". mysqli_connect_error());
        }
        else
        {
            return $conn;
        }

    }



    function checkEmailUniqueness($email)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM person_profiles WHERE email = '$email'";

        if($result = mysqli_query($conn, $sql))
        {
            if(mysqli_num_rows($result) > 0)
            {
                return true;
            }

        }
        else
        {
            die("Error: ". mysqli_error($conn));
        }

        return false;
    }




    function insertUser($name, $email, $gender, $dob, $bloodGroup, $degrees)
    {
        $conn = getConnection();

        $sql = "INSERT INTO person_profiles (name, email, gender, dob, blood_group, degree) VALUES ('$name', '$email', '$gender', '$dob', '$bloodGroup', '$degrees')";
 
        if(mysqli_query($conn, $sql))
        {
            return true;
        }
        else
        {
            die("Error: ". mysqli_error($conn));

        }

        return false;
    }






?>