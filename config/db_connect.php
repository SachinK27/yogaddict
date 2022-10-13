<?php
	if(!defined('ACCESS_ALLOWED'))
	{
		header('location: ../pages/errors/403.php');
	}
	
	$conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME); // mysqli object oriented
	if($conn->connect_error)
	{
		die("Database Connection Failed " . $conn->connect_error);
	}
?>
