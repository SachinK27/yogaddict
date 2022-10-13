<?php 
	header("refresh:6;url=../pages/login_signup.php");
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Success</title>
 	<?php include("../includes/links.php");?>
 </head>
 <body>
 	<div class="greentick">
		<img src="../assets/imgs/failed.png" width="150px;" style="margin-left: 590px;">
		<h1 align="center">Failed to Sign Up</h1>
		<h3 align="center">
			You will be redirected to SignUp Page shortly...
			<br><br>
			<a href="../index.php">Go To Homepage</a></h3>
	</div>
 </body>
 </html>
