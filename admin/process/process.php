<?php 
	session_start();

	define('ACCESS_ALLOWED',TRUE);
	require_once('../../config/define.php');
	require_once '../../config/db_connect.php';
	require_once '../../functions/functions.php';


	if (isset($_POST['uploadBanner'])) {
		if (isset($_FILES['bannerImage']['name']) && !empty($_FILES['bannerImage']['name'])) {
		$bannerImage= uploadFile('bannerImage', ROOT_PATH.'uploads/', '2000000');
	
			if (!$bannerImage) {
				header('Location: '.BASE_URL.'admin/index.php');
			}
		}

// print_r($bannerImage);
// die();

		//Inserting into database
		$stmt=$conn->prepare("INSERT INTO banner (bannerImage1, bannerImage1Desc1, bannerImage1Desc2) VALUES(?,?,?)");

		$stmt->bind_param("sss",$bannerImage,$bannerDescription1,$bannerDescription2);

		$bannerDescription1 =$_POST['bannerDescription1'];
		$bannerDescription2 =$_POST['bannerDescription2'];

		if ($stmt->execute()) {
			header('Location: '.BASE_URL.'admin/index.php');
			// echo "Success";
		}

	$stmt->close();
	$conn->close();

	}

 ?>