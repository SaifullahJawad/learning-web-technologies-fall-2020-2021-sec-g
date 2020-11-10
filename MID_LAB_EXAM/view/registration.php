<?php

	if(!isset($_SESSION))
	{
		session_start();
	}

	// if(isset($_SESSION["isLoggedIn"]) )
	// {
	// 	header("Location: dashboard.php");
	// }

	if(isset($_POST["submit"]))
	{
		echo "ello";
		require_once("../php/registrationValidation.php");
	}
	else
	{
		
		unset($_SESSION["previousInput"]);
		unset($_SESSION["errors"]);
	
	}






?>








<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

	<center>
	<form action="registration.php" method="POST">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					


						<fieldset>
							<legend><h3>REGISTRATION</h3></legend>
							Id<br/><input type="text" name="id" value= "<?php echo $_SESSION["previousInput"]["id"] ?? ""; ?>"> <?php echo $_SESSION["errors"]["id"] ?? "" ; ?> <br/>

							Password<br/><input type="password" name="password"> <?php echo $_SESSION["errors"]["password"] ?? "" ; ?> <br/>

							Confirm Password<br/><input type="password" name="confirmPassword"> <?php echo $_SESSION["errors"]["confirmPassword"] ?? "" ; ?> <br/>


							Name<br/><input type="text" name="name" value= "<?php echo $_SESSION["previousInput"]["name"] ?? ""; ?>" > <?php echo $_SESSION["errors"]["name"] ?? "" ; ?> <br/>


							User Type<hr/>
							<?php $userOption = $_SESSION["previousInput"]["userType"] ?? ""; ?>
							<input type="radio" name="userType" value="User" <?php if($userOption == "User") { echo "checked" ;} ?> />User 
							<input type="radio" name="userType" value="Admin" <?php if($userOption == "Admin") { echo "checked" ;} ?> />Admin <?php echo $_SESSION["errors"]["userType"] ?? "" ; ?>
							<hr/>
							<input type="submit" name="submit" value="submit">
							<a href="login.html">Sign In</a>
						</fieldset>


					
				</td>
			</tr>                                
		</table>
	</form>
	</center>
    
</body>
</html>


		