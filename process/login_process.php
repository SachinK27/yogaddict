<?php
	session_start();

	define('ACCESS_ALLOWED',TRUE);
	require_once '../config/define.php';
	require_once '../config/db_connect.php';
	

//on signin button click

if(isset($_POST['sign_in']))
{
	$validationErrors = [];		//Empty array to store errors.

	$email_id =$_POST['email_id'];

	//empty email validation
	$isEmailFilled = true;
	if(empty($_POST['email_id']))
	{
		$isEmailFilled = false;
		$validationErrors['email_id'] = "Email id is required";
	}

	//empty password validation
	if (empty($_POST['password'])) 
	{
		$validationErrors['password'] = "Password is required";
	}

	if(!empty($validationErrors)){
	$_SESSION['validationErrors'] = $validationErrors;
	
		header('Location: '.BASE_URL.'pages/login_signup.php');
		exit();
	}


	$emailCheckQuery = "SELECT user_id, user_email, user_password  FROM users where user_email = ?"; 
	
	$emailCheckstmt = $conn->prepare($emailCheckQuery);

	$emailCheckstmt->bind_param('s',$email_id);


	$password = $_POST['password'];
	
	$emailCheckstmt->execute();
	$emailCheckResult = $emailCheckstmt->get_result();

	if($emailCheckResult->num_rows > 0)
	{
		$loginContentRow = $emailCheckResult->fetch_assoc();
	
		$passwordFromDB = $loginContentRow['user_password'];

		if (password_verify($_POST['password'],$passwordFromDB))
		{	
			$loggedInUserInfoQuery = "select u.user_id, u.user_fullname, u.user_email, u.user_ph_no, ut.user_type, ut.user_type_display_name FROM users as u join user_type as ut on u.user_type_id = ut.user_type_id where u.user_id = ?";

			$loggedInUserInfoStmt = $conn->prepare($loggedInUserInfoQuery);
				// echo gettype($loginContentRow['user_id']);
				// die();
			$loggedInUserInfoStmt->bind_param('i',$loggedInUserId);


			$loggedInUserId = $loginContentRow['user_id'];


			$loggedInUserInfoStmt->execute();


			$loggedInUserInfoResult = $loggedInUserInfoStmt->get_result();
			

			if($loggedInUserInfoResult->num_rows > 0)
			{

				$_SESSION['userInfo'] = $loggedInUserInfoResult->fetch_assoc();

				if($_SESSION['userInfo']['user_type'] === 'administrator'){
				header('Location: '.BASE_URL.'admin/index.php');
				exit();

			}
			elseif($_SESSION['userInfo']['user_type'] === 'user')
			{

				header('Location: '.BASE_URL.'index.php');
				// $_SESSION['success'] = 'Login Successful.';	
				exit();			}
			}
		}
		else
		{		
			$_SESSION['fail'] = 'Incorrect Password';
			header('Location: '.BASE_URL.'pages/login_signup.php');
			exit();

		}
	}
	else
	{
		$_SESSION['fail'] = "Invalid Credentials";
		header('Location: '.BASE_URL.'pages/login_signup.php');
		exit();
	}



	
	$conn->close();

}else{
	header('Location: '.BASE_URL.'pages/errors/403.php');
	exit();
}

unset($_SESSION['success']);
unset($_SESSION['fail']);

?>