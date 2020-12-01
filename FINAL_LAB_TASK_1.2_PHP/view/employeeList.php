<?php
	include('header.php');
	require_once('../models/userService.php');

	$employeeList = getEmployeeList();

?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	
		<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>Employee List</h3>
	<table border="1"> 
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Company Name</td>
			<td>Contact</td>
		</tr>

	<?php for($i=0; $i< count($employeeList); $i++){ ?>

			<tr>
				<td><?=$employeeList[$i]['id']?></td>
				<td><?=$employeeList[$i]['name']?></td>
				<td><?=$employeeList[$i]['company_name']?></td>
				<td><?=$employeeList[$i]['contact']?></td>
				<td>
					<a href="edit.php?id=<?=$userlist[$i]['id']?>">EDIT</a> | 
					<a href="delete.php?id=<?=$userlist[$i]['id']?>">DELETE</a>
				</td>
			</tr>
	<?php } ?>

	</table>


</body>
</html>