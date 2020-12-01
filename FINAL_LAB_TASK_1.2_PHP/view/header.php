<?php

if(!isset($_COOKIE['isLoggedIn']))
{
	header('location: login.php');
}
?>