<?php
	session_start();

	define('ACCESS_ALLOWED',TRUE);
	require_once '../config/define.php';
	require_once '../config/db_connect.php';
	require_once '../functions/functions.php'
	

	if (isset($_POST['upload'])) {
		$file = $_FILES['avatar'];	//Get File Info

		$fileName = $_FILES['avatar']['name'];
		$fileTmpName = $_FILES['avatar']['tmp_name'];
		$fileSize = $_FILES['avatar']['size'];
		$fileError = $_FILES['avatar']['error'];
		$fileType = $_FILES['avatar']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg','jpeg','png');

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 500000) {
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					$fileDestination = '../uploads/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
					$_SESSION['success'] = 'Upload Successful.';	
					// header("Location: ../pages/profile.php?uploadsuccess");
					echo "Upload Successful";

				}else{
					echo "Your File is Too Big.";
				}
			}else{
				echo "Error Uploading Photo";
			}
		}else{
			echo "File Type Not Supported!";
		}

	}



?>