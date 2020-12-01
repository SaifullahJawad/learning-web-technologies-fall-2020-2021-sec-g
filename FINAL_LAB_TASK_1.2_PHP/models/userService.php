<?php


    if (realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ))
    {
        header("HTTP/1.0 404 Not Found");
        exit();   

    }
	require_once("db.php");

    function validateAdmin($user)
    {
		$conn = getConnection();
		$sql = "SELECT * FROM users WHERE username='{$user['username']}' and password='{$user['password']}' and user_type = 'admin'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
			return true; 
        }
        else
        {
			return false;
		}
    }
    


    function getEmployeeList()
    {

		$conn = getConnection();
		$sql = "SELECT * FROM users WHERE user_type = 'employee'";

		$result = mysqli_query($conn, $sql);
		$employees = [];

        while ($row = mysqli_fetch_assoc($result))
        {
			array_push($employees, $row);
		}

		return $employees;
    }
    


    

	function getByIdUser($id){

		$conn = getConnection();
		$sql = "select * from users where id=$id";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row > 0 )){
			return $row;
		}else{
			return null;
		}
	}

    

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

	function deleteUser($id){

		$conn = getConnection();
		$sql = "delete from users where id=$id')";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

	function updateUser($user){

		$conn = getConnection();
		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type='{$user['type']}'";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

?>