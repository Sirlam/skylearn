<?php include "core.php";
	if(!empty($_POST['cat_name'])){
		$cat_name = trim(mysql_real_escape_string($_POST['cat_name']));
		$query_check = mysql_query("SELECT * FROM `category` WHERE `cat_name`='$cat_name'");
		$num = mysql_num_rows($query_check);
		if($num>0){
			$message = "<span style='color:red;'>Category already exists</span>";
			$_SESSION['message'] = $message;
			header("location:admin_add_category.php");exit;
		}
		
		$query = mysql_query("INSERT INTO `category` (`cat_name`)VALUES('$cat_name')");
		if($query){
			$message = "<span style='color:green;'><h4>Category was successfully added</span></h4>";
			$_SESSION['message'] = $message;
			header("location:admin_add_category.php");exit;
		}else{
			$message = "<span style='color:red;'>Category was successfully added</span>";
			$_SESSION['message'] = $message;
			header("location:admin_add_category.php");
		}
	}else{
		$message = "You need to fill in all fields";
	}
?>