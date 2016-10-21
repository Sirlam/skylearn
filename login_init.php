ss<?php include "core.php";
	
	
	if(!empty($_POST["email"]) &&!empty($_POST["password"])){
		 $email = $_POST["email"];
		$password = $_POST["password"];
		
		
		
		
		$query = mysql_query("SELECT * FROM `users` WHERE  `email` = '$email' AND `password`='$password'");
		if($query){
			$num = mysql_num_rows($query);
			
			if($num >=1){
			
				$acc = mysql_fetch_assoc($query);
				$status = $acc['status'];
				//$suspend = $acc['suspend'];
				
				if($status == 0 ){
				
					
					$id = $acc['id'];
					$userid = $acc['username'];
					$email = $acc['email'];
					$first_name = $acc['firstname'];
					$last_name = $acc['lastname'];
					$time = time();
					
					$_SESSION['id'] = $id;
					$_SESSION['firstname'] = $first_name;
					$_SESSION['lastname'] = $last_name;
					$_SESSION['email'] = $email;
					$_SESSION['userid'] = $userid;
					$_SESSION["temp"] = "temp";
					$que = mysql_query("UPDATE `users` SET `last_login`='$time' WHERE `email` = '$email' AND `password`='$password'");
					
					 $_SESSION['email'];exit;
					
					header("location:home.php");
					exit;
				}else{
					
					
					$id = $acc['id'];
					$userid = $acc['username'];
					$email = $acc['email'];
					$first_name = $acc['firstname'];
					$last_name = $acc['lastname'];
					$time = time();
					
					
					$_SESSION['id'] = $id;
					$_SESSION['firstname'] = $first_name;
					$_SESSION['lastname'] = $last_name;
					$_SESSION['email'] = $email;
					$_SESSION['username'] = $userid;
					$_SESSION["perm"] = "perm";
					$que = mysql_query("UPDATE `users` SET `lastlog`='$time' WHERE `email` = '$email' AND `password`='$password'");
					
					
					header('location:home.php');
					exit;
				}
				
			}else{
				
				$message = "<span style='color:red;'>INCORRECT LOGIN DETAILS</span>";
				$_SESSION["message"] = $message;
				header("location:login_v.php");
				exit;
			}
		}else{
			$message = "<span style='color:red;'>An error occurred while processing your request, please try again later or contact us</span>";
			$_SESSION["message"] = $message;
			header("location:login_v.php");
			exit;
		}
		
		
		
	}else{
		$message = "<span style='color:red;'>You need to fill in all fields</span>";
		$_SESSION["message"] = $message;
		header("location:login_v.php");
	}
