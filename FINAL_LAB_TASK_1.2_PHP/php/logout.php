<?php


	setcookie("isLoggedIn", "true", time()-1000, "/");
	header("Location: ../view/login.php");

?>