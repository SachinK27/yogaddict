<?php
	session_start();
	define('ACCESS_ALLOWED',TRUE);
	require_once('../config/define.php');
	$currentPage = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - Yogaddict</title>
	<?php include(ROOT_PATH."includes/links.php");?>
</head>
<body>
<!-- Navbar -->
	<?php include (ROOT_PATH."includes/nav.php");?>
<!-- Navbar ends -->

<!-- Contact Us Form -->
	<div class="container-fluid mycontfluid_contact">
		<!-- <img src="../assets/imgs/contact_bg2.jpg" width="100%"> -->
		<h1 align="center">Don't be a stranger <br>Just say hello.</h1>
		
	</div>
	<div class="container-fluid">
		<div class="cont container">
			<h1 class="sample_blogs">Contact Us</h2>
			<form>
				<input type="name" class="txtbx1 form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
				<input type="email" class="txtbx1 form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<textarea class="txtarea1 form-control" placeholder="Go ahead, we're listening..." rows="4" cols="50"></textarea>
				<button type="submit" class="btnbx1 btn btn-primary">Send</button>
			</form>
		</div>
	</div>


<!-- Footer Start-->
	<?php require_once(ROOT_PATH."includes/footer.php");?>
<!-- Footer Ends Here-->

	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
</body>
</html>