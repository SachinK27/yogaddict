<?php 
	session_start();
	define('ACCESS_ALLOWED',TRUE);
	require_once '../config/define.php';
	session_unset();
	session_destroy();

	$_SESSION['success'] = 'You have been logged out.';	
	
	header('Location: '.BASE_URL.'index.php');
	exit();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Logout</title>
 </head>
 <body>
 	<h2>You have logged out successfully</h2>
 </body>
 </html>