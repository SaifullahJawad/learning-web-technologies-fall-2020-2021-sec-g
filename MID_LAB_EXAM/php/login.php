<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    // if(isset($_SESSION["isLoggedIn"]) || isset($_COOKIE["loggedInUserName"]) )
    // {
    //     header("Location: dashboard.php");
    // }

    $errors = ["id" => "", "password" => ""];



    if(isset($_POST["submit"]))
    {

        if(empty($_POST["id"]))
        {
            $errors["id"] = "*required";
        }



        if(empty($_POST["password"]))
        {
            $errors["password"] = "*required";
        }


        if(!empty($_POST["id"]) && !empty($_POST["password"]) )
        {

            if(isValidUser())
            {
                $_SESSION["isLoggedIn"] = true;
                header("Location: ../profile.php");
            }
            else
            {
                $errors["id"] = "Invalid User Name or Password";
            }




        }

        
	}
	


	function isValidUser()
    {

        $myFile = fopen("../userData.txt", "r+");
        while($data = fgets($myFile))
        {
            $userData = explode("|",$data);

            if($userData[0] == $_POST["id"] && $userData[1] == $_POST["password"])
            {
                $_SESSION["id"] = $userData[0];
                $_SESSION["password"] = $userData[1];
                $_SESSION["name"] = $userData[2];
                $_SESSION["userType"] = $userData[3];
               
                fclose($myFile);
                return true;
            }
        }

        fclose($myFile);
        return false;
    }
    
    
   



?>





<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
	<center>
	<form action="login.php" method="POST">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend><h3>LOGIN</h3></legend>
						User Id<br/>
						<input type="text" name="id"> <?php echo $errors["id"] ?? "" ; ?> <br/>                               
						Password<br/>
						<input type="password" name="password"> <?php echo $errors["password"] ?? "" ; ?>
						<br /><hr/>
						<input type="submit" name="submit" value="Login">
						<a href="registration.html">Register</a>
					</fieldset>
				</td>
			</tr>                                
		</table>
	</form>
	</center>
	</body>
</html>