<?php
	define('DB_HOST', 'localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_NAME','yogaddict');

	define("ROOT_PATH",$_SERVER['DOCUMENT_ROOT'].'/projects/Yogaddict_v3/');
	
 	$base_url = "http://".$_SERVER['SERVER_NAME'].'/projects/Yogaddict_v3/';

	define("BASE_URL",$base_url);

	define("BASE_PATH", $_SERVER['DOCUMENT_ROOT'].'/projects/Yogaddict_v3/');

	if(!defined('ACCESS_ALLOWED')){
		header('Location: '.BASE_URL.'pages/errors/403.php');
		exit();
	}
?>