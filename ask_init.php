<?php 
include "core.php";
$username = $_SESSION['username'];
	
	if(!empty($_POST['title']) &&!empty($_POST['content'])){
		$title = trim(mysql_real_escape_string($_POST['title']));
		$content = trim(mysql_real_escape_string($_POST['content']));
		
		// Generate unique for the question 
		
		function generateRandomString($length = 13, $letters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqretuvwxyz'){
			$s = '';
		$lettersLength = strlen($letters)-1;

		for($i = 0 ; $i < $length ; $i++)
		{
			$s .= $letters[rand(0,$lettersLength)];
		}

		return $s;
		}
		
		
		$time = time();
		$uniqueid ="que".generateRandomString();
		
		
		
		$query = mysql_query("INSERT INTO `questions`(`uniqueid`,`title`,`question`,`username`,`time`,`status`) VALUES ('$uniqueid','$title','$question','$username','$time','1')");
		if($query){
			$message = "You question was successfully posted to the site";
			$_SESSION['message'] = $message;
			header('location:ask.php');
		}else{
			$message = "<span style='color:green'>You question was successfully posted to the site</span>";
			$_SESSION['message'] = $message;
			header('location:ask.php');
		}
	}else{
			$message = "<span style='color:red'>You need to fill in all fields</span>";
			$_SESSION['message'] = $message;
			header('location:ask.php');
	}
?>