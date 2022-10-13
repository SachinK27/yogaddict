<?php
	session_start();
	define('ACCESS_ALLOWED',TRUE);
	require_once('../config/define.php');
	$currentPage = basename($_SERVER['PHP_SELF']);

	$value=[""];
	if (isset($_SESSION['userInfo'])) {
		$info= ($_SESSION['userInfo']);
		$value=$info;
	};

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile1 - Yogaddict</title>
	<?php include(ROOT_PATH."includes/links.php");?>
</head>
<body>
<!-- Navbar -->
	<?php include (ROOT_PATH."includes/nav.php");?>
<!-- Navbar ends -->

<!-- Blogs -->
	<div class="container-fluid profilebg">
		<div class="container">
			<div class="row">
				<div class="whitebg">
					<div class="user_img col-md-5">
						<div class="profile-pic">
							<img class="avatar" src="<?php echo BASE_URL;?>/assets/imgs/alex.png">
						</div>
						<a href=""><img src="<?php echo BASE_URL;?>/assets/imgs/edit.png" width="50px;"></a>
						<h2><?php echo ($_SESSION['userInfo']['user_fullname']);?></h2>
					</div>
					<form method="POST" action="<?php echo BASE_URL;?>process/upload.php" enctype="multipart/form-data">
						<div class="data">
							<input type="file" class="txtbx2 inline" name="avatar">
							<input type="submit" name="upload" value="Upload" class="btnbx_mdlbx2 inline">
						</div>
					</form>
					<div class="col-md-7 user_details">
						<h2>Personal Information:</h2><br>
						<!-- <div class="data">
							<h4 style="display: inline;">Username: </h4>
							<h4 style="display: inline;">@alex_mercer</h4>
						</div> -->
						<form method="POST" action="<?php echo BASE_URL;?>process/update_process.php">
							<div class="data">
							<h4 class="inline">Name: </h4>
							<input type="text" class="txtbx2" name="full_name" style="margin-left: 78px;" value="<?php echo ($_SESSION['userInfo']['user_fullname']); ?>">
							<!-- <h4 style="display: inline;">Alex Mercer</h4> -->
							</div>
							<div class="data">
								<h4 class="inline">Phone No.: </h4>
								<input type="text" class="txtbx2" name="contact_number" style="margin-left: 45px;" value="<?php echo ($_SESSION['userInfo']['user_ph_no']); ?>">
								<!-- <h4 style="display: inline;">0987654321</h4> -->
							</div>
							<div class="data">
								<h4 class="inline">Email ID: </h4>
								<input type="text" class="txtbx2" name="email_id" style="margin-left: 60px;" value="<?php echo ($_SESSION['userInfo']['user_email']); ?>">
								<!-- <h4 style="display: inline;">alex.mercer@yogaddict.com</h4> -->
							</div>
							<div class="data data1">
					            <input type="submit" name="updatedetails" value="Update" class="btnbx_mdlbx2 inline">
					            <input type="submit" name="changepassword" value="Change Password" class="btnbx_mdlbx2 inline">
					        </div>
					        <!-- <div class="confirmation">
					            <h4><?php if (!empty($confirmation)) {
					            	echo "$confirmation";
					            } ?></h4>
					        </div> -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Blogs ends -->

<!-- Footer Start-->
	<?php include("../includes/footer.php")?>
<!-- Footer Ends Here-->

	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
</body>
</html>