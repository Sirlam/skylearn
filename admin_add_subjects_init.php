<?php include "core.php";
	
	if(!empty($_POST['title']) &&!empty($_POST['cat']) &&!empty($_POST['duration']) &&!empty($_FILES['image']) &&!empty($_FILES['image2'])){
		$title = $_POST['title'];
		$cat = $_POST['cat'];
		$duration = $_POST['duration'];
		$finalname = strtolower($title.$cat);
		$time = time();
		
		
		$query_check = mysql_query("SELECT * FROM `subjects` WHERE `cat`='$cat' AND `title`='$title' ");
		$num = mysql_num_rows($query_check);
		if($num>0){
			$message = "<span style='color:red'>subject already exists for that category</span>";
			
					$_SESSION["message"] = $message;
						header("location:admin_add_subjects.php");
		}else{
			
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size =$_FILES['image']['size'];
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_type=$_FILES['image']['type'];
			
			$file_name2 = $_FILES['image2']['name'];
			$file_size2 =$_FILES['image2']['size'];
			$file_tmp2 =$_FILES['image2']['tmp_name'];
			$file_type2=$_FILES['image2']['type'];
			
			
			
			$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
			$file_ex2t=strtolower(end(explode('.',$_FILES['image2']['name'])));
			
			$expensions= array("txt","txt"); 		
			if(in_array($file_ext,$expensions)=== false OR in_array($file_ext,$expensions)=== false){
				$errors="extension not allowed, please choose a txt file.";
			}
			if($file_size > 2097152 ){
			$errors='File size must be excately 2 MB';
			}				
			if(empty($errors)==true){
				if(move_uploaded_file($file_tmp,"questions/".$finalname."questions.".$file_ext)){
					move_uploaded_file($file_tmp2,"answers/".$finalname."answers.".$file_ext);
					
					$path = "questions/".$finalname."questions.".$file_ext;
					$answerpath = "answers/".$finalname."answers.".$file_ext;
					$query_insert = mysql_query("INSERT INTO `subjects` (`title`,`cat`,`duration`,`path`,`answerpath`,`time`)VALUES('$title','$cat','$duration','$path','$answerpath','$time')");
					if($query_insert){
					
						$message = "<strong>".$title."</strong> was successfully uploaded to <strong>".$cat."</span>";
						$_SESSION["message"] = $message;
						header("location:admin_add_subjects.php");
						
					}else{
					echo mysql_error();
					}
				}else{
					$message = "<span style='color:red'>Error while uploading file </span>";
					$_SESSION["message"] = $message;
						header("location:admin_add_subjects.php");
				}
				
				
			}else{
				 $errors;
				 $message = "<span style='color:red'>".$error."</span>";
					$_SESSION["message"] = $message;
						header("location:admin_add_subjects.php");
			}
		}
		
	}else{
	$message = "span style='color:red'>You need to fill in all fields</span>";
			
					$_SESSION["message"] = $message;
						header("location:admin_add_subjects.php");
		
	}
?>