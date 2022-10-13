<?php
	session_start();
	define('ACCESS_ALLOWED',TRUE);
	require_once '../config/define.php';
	
	require_once '../config/db_connect.php';

	if(isset($_POST['sign_up']))
	{
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

		//For Password
		$isPasswordFilled = true;
		if(empty($_POST['password']))
		{
			$isPasswordFilled = false;
			$validationErrors['password'] = "Password is required  <br>";
		}

		//For Confirm Password
		if(empty($_POST['confirm_password']))
		{
			$validationErrors['confirm_password'] = "confirm password is required  <br>";
		}

		// At this point all the errors are stored in $validationErrors

		//Check for duplicate email in database
		if($isEmailFilled){

			$emailCheckQuery = "SELECT user_email  FROM users where user_email = ?"; 
			
			$emailCheckstmt = $conn->prepare($emailCheckQuery);

			$emailCheckstmt->bind_param('s',$email_id);

			$email_id =$_POST['email_id'];
			$emailCheckstmt->execute();
			$emailCheckResult = $emailCheckstmt->get_result();
			if($emailCheckResult->num_rows > 0){
				$validationErrors['email_id'] = 'Email Already exists.';
			}
		}
		
   		//Check for duplicate Contact number in database
   		if($isContactNumberFilled){

			$contactNumberCheckQuery = "SELECT user_ph_no FROM users where user_ph_no = ?";

			$contactNumberCheckstmt = $conn->prepare($contactNumberCheckQuery);

			$contactNumberCheckstmt->bind_param('i',$contact_number);

			$contactNumberCheckstmt->execute();
			$contactNumberCheckResult = $contactNumberCheckstmt->get_result();
			if($contactNumberCheckResult->num_rows > 0){
				$validationErrors['contact_number'] = 'Contact Number Already exists.';
			}
		}

		//If there is any error then redirect to signup page
		if(!empty($validationErrors)){
			$_SESSION['validationErrors'] = $validationErrors;
			
			header('Location: '.BASE_URL.'pages/login_signup.php');
			exit();
		}

		//Inserting into database
		$stmt=$conn->prepare("INSERT INTO users (user_fullname, user_email, user_ph_no, user_password,  	user_type_id) VALUES(?,?,?,?,?)");

		$stmt->bind_param("ssssi",$full_name,$email_id,$contact_number,$password,$user_type_id);

		$full_name =$_POST['full_name'];
		$email_id =$_POST['email_id'];
		$contact_number =$_POST['contact_number'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$user_type_id = 2;

// print_r($contact_number);
// die();

		//Store logged in user data in session
		if($stmt->execute())
		{
			$_SESSION['loggedInUserId'] = $stmt->insert_id;

			$loggedInUserInfoQuery = "select u.user_fullname, u.user_email, u.user_ph_no, ut.user_type, ut.user_type_display_name FROM users as u join user_type as ut on u.user_type_id = ut.user_type_id where u.user_id = ?"; 

			$loggedInUserInfoStmt = $conn->prepare($loggedInUserInfoQuery);

			$loggedInUserInfoStmt->bind_param('i',$loggedInUserId);

			$loggedInUserId = $_SESSION['loggedInUserId'];

			$loggedInUserInfoStmt->execute();
 
			$loggedInUserInfoResult = $loggedInUserInfoStmt->get_result();

			if($loggedInUserInfoResult->num_rows > 0){

				$_SESSION['userInfo'] = $loggedInUserInfoResult->fetch_assoc();
				// print_r($_SESSION['userInfo'] );

				$_SESSION['success'] = 'signup successful.';

				if($_SESSION['userInfo']['user_type'] === 'admin'){
					header('Location: '.BASE_URL.'admin/index.php');
				}else if($_SESSION['userInfo']['user_type'] === 'usr'){

					header('Location: '.BASE_URL.'pages/login_signup.php'); // my_profile
				}
			}else{				
				$_SESSION['fail'] = 'Failed to sign up.';
				header('Location: '.BASE_URL.'pages/login_signup.php');
			}
		if($_SESSION['userInfo']['user_type'] === 'admin'){
			// dash board or admin page access 
		}else{
			// redirect to home page
			header('Location: '.BASE_URL.'index.php');
			}
		}
				else
				{
					$_SESSION['fail'] = 'Failed to sign up.';
					header('Location: '.BASE_URL);
				}
		
		$stmt->close();
		$conn->close();
	
	}else{
		if(!defined('ACCESS_ALLOWED')){
			header('Location: '.BASE_URL.'process/access_denied.php');
		}
	}
?>