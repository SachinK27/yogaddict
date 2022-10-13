<?php 
	header("refresh:5;url=../index.php");
	session_start();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Success</title>
 	<?php include("../includes/links.php");?>
 </head>
 <body>
 	<div class="greentick" style="text-align: center;">
		<img src="../assets/imgs/greentick.gif">
		<h1>Sign Up Successfully Completed</h1>
		<h3>
			You will be redirected to Homepage shortly...
			<br><br>
			<a href="../index.php">Go to Home Page</a></h3>
	</div>
	<style type="text/css">
		body{
			font-family: 'Quicksand', sans-serif;
		}
	</style>
 </body>
 </html>
