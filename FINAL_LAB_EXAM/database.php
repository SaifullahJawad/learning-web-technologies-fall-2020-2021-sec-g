<?php


    function getConnection()
    {
        $conn = mysqli_connect("localhost", "root", "", "lab_exam");

        if(!$conn)
        {
            die("Connection error:". mysqli_connect_error());
        }
        else
        {
            return $conn;
        }

    }











    function validateUser($username, $password)
    {
        $conn = getConnection();
        $sql = "SELECT * FROM employees WHERE username = '$username' AND password = '$password' ";

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




    function createUser($name, $contact, $usrname, $password)
    {
        $conn = getConnection();

        $sql = "INSERT INTO employees (name, contact, username, password) VALUES ('$name', '$contact', '$username', '$password')";
 
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