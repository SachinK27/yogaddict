<?php
	
	//Session must be started in the page where this file will be included.

	function uploadFile(
		$inputName, 
		$filePath,
		$maxFileSize=5000000, 
		array $allowedFileExtention=['jpg','jpeg','png']
	){
		$file = $_FILES[$inputName];	//Get File Info

		$fileName = $_FILES[$inputName]['name'];
		$fileTmpName = $_FILES[$inputName]['tmp_name'];
		$fileSize = $_FILES[$inputName]['size'];
		$fileError = $_FILES[$inputName]['error'];
		$fileType = $_FILES[$inputName]['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowedFileExtention = array('jpg','jpeg','png');

		if (in_array($fileActualExt, $allowedFileExtention)) {
			if ($fileError === 0) {
				if ($fileSize < $maxFileSize) {
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					$fileDestination = $filePath.'/'.$fileNameNew;
					if(move_uploaded_file($fileTmpName, $fileDestination)){
						$_SESSION['success'] = 'Upload Successful.';
						return $fileNameNew;
						exit();
					}else{
						$_SESSION['fail'] = 'Failed to Upload File.';
						return false;
						exit();
					}
				}else{
					$fileSizeInKB= sprintf('%.2f',$maxFileSize/1024);
					$_SESSION['fail'] = 'File size should be less than '.$fileSizeInKB.' KB.';
					return false;
					exit();
				}
			}else{
				$_SESSION['fail'] = 'There was an error uploading your photo';
				return false;
				exit();
			}
		}else{
			$_SESSION['fail'] = 'File Type Not Supported!';
			return false;
			exit();
		}
	}



?>