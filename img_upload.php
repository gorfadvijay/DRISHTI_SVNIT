<?php
	include('connect.php');
	$fileName = $_FILES['Filename']['name'];
	
	$target = "image/";		
		$img = $target.$fileName;	
		$tempFileName = $_FILES["Filename"]["tmp_name"];
		$result = move_uploaded_file($tempFileName,$img);
	/*
	* 	If file is not present in the destination folder
	*/
	
$insert_sql = "INSERT INTO 
project (img)

VALUES ('$img')";
;
	
	/*
	* 	If file is already present in the destination folder
	*/
	
?>
