<?php

	if(isset($_FILES['image'])){
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];   
		$zzz = "jamb_maths";
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		
		$expensions= array("txt","txt"); 		
		if(in_array($file_ext,$expensions)=== false){
			$errors="extension not allowed, please choose a txt file.";
		}
		if($file_size > 2097152){
		$errors='File size must be excately 2 MB';
		}				
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"questions/".$zzz);
			echo "Success";
		}else{
			echo $errors;
		}
	}
?>

<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="image" />
<input type="submit"/>
</form>