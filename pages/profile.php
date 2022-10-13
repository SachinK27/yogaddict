<?php
	session_start();
	define('ACCESS_ALLOWED',TRUE);
	require_once('../config/define.php');
	$currentPage = basename($_SERVER['PHP_SELF']);

	$value=[""];
	if (isset($_SESSION['userInfo'])) {
		$info[]= ($_SESSION['userInfo']);
		$value=$info;
	};
if(isset($_POST['updatedetails']))
{
	//Upload Image
	// Way to pass values in uploadFile function
	// uploadFile('avatar', '../uploads', '1000000',['jpg','pdf','gif']);
// print_r($_POST);
// die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile - Yogaddict</title>
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
							<img class="avatar" id="output" src="<?php echo BASE_URL;?>uploads/<?= $_SESSION['userInfo']['user_profile_picture'];?>">
						</div>
						<div class="editImage">
							<img class="editImage" id="edit" src="<?php echo BASE_URL;?>assets/imgs/edit.png">
						</div>
						<h2><?php echo ($_SESSION['userInfo']['user_fullname']);?></h2>
						<!-- <p id="confirmMessage" style="color: green"></p> -->
					</div>
					<div class="col-md-7 user_details">
						<h2>Personal Information:</h2><br>

						<form method="POST" action="<?php echo BASE_URL;?>process/update_process.php" enctype="multipart/form-data">
							<input type="file" class="txtbx2 inline propic" name="avatar" id="uploadPhoto">

							<div class="data">
							<h4 class="inline">Name: </h4>
							<input type="text" id="name" class="txtbx2" name="full_name" style="margin-left: 78px;" value="<?php echo ($_SESSION['userInfo']['user_fullname']); ?>">
							<!-- <h4 style="display: inline;">Alex Mercer</h4> -->
							</div>
							<div class="data">
								<h4 class="inline">Phone No.: </h4>
								<input type="text" id="ph_no" class="txtbx2" name="contact_number" style="margin-left: 45px;" value="<?php echo ($_SESSION['userInfo']['user_ph_no']); ?>">
								<!-- <h4 style="display: inline;">0987654321</h4> -->
							</div>
							<div class="data">
								<h4 class="inline">Email ID: </h4>
								<input type="text" id="email" class="txtbx2" name="email_id" style="margin-left: 60px;" value="<?php echo ($_SESSION['userInfo']['user_email']); ?>">
								<!-- <h4 style="display: inline;">alex.mercer@yogaddict.com</h4> -->
							</div>
							<div class="data data1">
					            <input type="submit" name="updatedetails" value="Update" class="btnbx_mdlbx2 inline updateBtn">
					            <!-- <input type="submit" name="changepassword" value="Change Password" class="btnbx_mdlbx2 inline"> -->
					            <p id="confirmMessage" style="color: green"></p>
					        </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Blogs ends -->

<!-- Display Message -->
<?php if (isset($_SESSION['success'])) { ?>
	<div class="alert alert-success alert-dismissible validationSuccess show" role="alert">
	<?php echo $_SESSION['success']; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      		<span aria-hidden="true" class="close-success">&times;</span>
  		</button>
	</div>
<?php }?>

<?php if (isset($_SESSION['fail'])) { ?>
	<div class="alert alert-danger alert-dismissible validationSuccess show" role="alert">
		<?php echo $_SESSION['fail']; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      		<span aria-hidden="true" class="close-success">&times;</span>
  		</button>
		</div>
<?php }?>
<!-- Display Message Ends -->

<!-- Footer Start-->
	<?php require_once(ROOT_PATH."includes/footer.php");?>
<!-- Footer Ends Here-->

	<script type="text/javascript">

		$('#edit').click(function(){
			$('#uploadPhoto').trigger('click');
		});


		$('#uploadPhoto').change(function(event){
			if (event.target.files){
				var reader = new FileReader();
				reader.onload = function(e){
					$('#output').attr('src', e.target.result);
				}
				reader.readAsDataURL(event.target.files[0]);
			}
		});

		$('#uploadPhoto').change(function(event){
			$('#confirmMessage').text("Click 'Update' to Save Changes");
		});


	</script>
</body>
</html>

<?php
	if (isset($_SESSION['success'])) {
		unset($_SESSION['success']);
	}
	if (isset($_SESSION['fail'])) {
		unset($_SESSION['fail']) ;
	}



?>