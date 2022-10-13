<?php
	session_start();

	define('ACCESS_ALLOWED',TRUE);
	require_once('../config/define.php');
	require_once '../config/db_connect.php';
	require_once '../functions/functions.php';

	$value=[];
	if (isset($_SESSION['userInfo'])) {
		$info  = $_SESSION['userInfo'];
		$value = $info;
	};

//on update button click

if(isset($_POST['updatedetails']))
{
	//Upload Image
	// Way to pass values in uploadFile function
	// uploadFile('avatar', '../uploads', '1000000',['jpg','pdf','gif']);
	// var_dump($_FILES);
	// die();
	if (isset($_FILES['avatar']['name']) && !empty($_FILES['avatar']['name'])) {
		$file_uploaded= uploadFile('avatar', ROOT_PATH.'uploads/', '2000000');
	
		if (!$file_uploaded) {
			header('Location: '.BASE_URL.'pages/profile.php');
		}
	}

	//Image Upload Code Ends.

	$validationErrors = [];		//Empty Array to store errors

	//For Full Name
	if(empty($_POST['full_name']))
	{
		$validationErrors['full_name'] = "Full Name is required <br>";
	}

	//For Email
	$isEmailFilled = true;
	if(empty($_POST['email_id']))
	{
		$isEmailFilled = false;
		$validationErrors['email_id'] = "Email Id is required  <br>";
	}

	//For Contact Number
	$isContactNumberFilled = true;
	if(empty($_POST['contact_number']))
	{
		$isContactNumberFilled = false;
		$validationErrors['contact_number'] = "Contact Number is required  <br>";
	}

	//Inserting into database
	$stmt=$conn->prepare("UPDATE users SET user_fullname=? , user_email=? , user_ph_no=? , user_profile_picture=? WHERE user_id=?");

	$stmt->bind_param('ssisi',$full_name,$email_id,$contact_number,$file_uploaded,$user_id);

	$full_name =$_POST['full_name'];
	$email_id =$_POST['email_id'];
	$contact_number =$_POST['contact_number'];
	$user_id =$info['user_id'];


	if ($stmt->execute()) {
		$updateStmt= $conn->prepare("SELECT user_fullname, user_email, user_ph_no, user_profile_picture, user_id FROM users WHERE user_id=?");
		$updateStmt->bind_param('i',$user_id);
		$user_id= $info['user_id'];
		$updateStmt->execute();
		$updateResult=$updateStmt->get_result();
		$_SESSION['userInfo']=$updateResult->fetch_assoc();
		// print_r($_SESSION['userInfo']);
		$updateStmt->close();
	}
	

	$stmt->close();
	$conn->close();
	
	header('Location: '.BASE_URL.'pages/profile.php');
	exit();
}


// if(empty($_SESSION['userInfo'])){
// 	header('Location: '.BASE_URL.'pages/errors/403.php');
// 	exit();
// }
unset($_SESSION['success']);
unset($_SESSION['fail']);
?>