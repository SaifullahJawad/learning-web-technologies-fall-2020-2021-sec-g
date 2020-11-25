<?php

	$location 	= 'localhost';
	$dbuser		= 'root';
	$dbpass		= '';
	$database	= 'webtechlabtask'; 

	function getConnection(){
		
		global $location;
		global $dbuser;
		global $dbpass;
		global $database;

		$conn = mysqli_connect($location, $dbuser, $dbpass, $database);
		return $conn;
	}



	function retrieveUser($id)
	{
		$conn = getConnection();
	    $sql = "select * from usermanagementsystem where id='".$id."'";
        $result = mysqli_query($conn, $sql);
        
        $userData = mysqli_fetch_assoc($result);

        $_SESSION["id"] = $userData["id"];
        $_SESSION["userName"] = $userData["userName"];
        $_SESSION["password"] = $userData["password"];
        $_SESSION["email"] = $userData["email"];
        $_SESSION["type"] = $userData["type"];
	}



	function freeUserSession()
	{
		unset($_SESSION["id"]);
		unset($_SESSION["userName"]);
		unset($_SESSION["password"]);
		unset($_SESSION["email"]);
		unset($_SESSION["type"]);
	}

?>