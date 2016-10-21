<?php 
	
		include "core.php";
		$username = $_SESSION['username'];
		echo $postkey = $_GET['key'];exit;
	
	if(!empty($_POST['comment'])){
		 $comment = trim(mysql_real_escape_string($_POST['comment']));
		
		
		// Generate unique for the comment 
		
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
		$commentid ="com".generateRandomString();
		
		
		
		$query = mysql_query("INSERT INTO `comments`(`postkey`,`username`,`comment`,`time`,`commentid`) VALUES ('$postkey','$username','$comment','$time','$commentid')");
		if($query){
			$message = "You contribution was successfully added to the question";
			$_SESSION['message'] = $message;
			header('location:questions.php?key='.$postkey);
		}else{
			$message = mysql_error();
			$_SESSION['message'] = $message;
			header('location:questions.php?key='.$postkey);
		}
	}else{
			$message = "<span style='color:red'>Type in your question before you click on the ENTER button</span>";
			$_SESSION['message'] = $message;
			header('location:questions.php?key='.$postkey);
	}
?>