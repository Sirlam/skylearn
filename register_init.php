<?php include "core.php";
	if(!empty($_POST["firstname"]) &&!empty($_POST["lastname"]) &&!empty($_POST["password"]) &&!empty($_POST["confirmpassword"]) &&!empty($_POST["email"]) &&!empty($_POST["phone"])&&!empty($_POST["country"])&&!empty($_POST["state"]) &&!empty($_POST["gender"])){
	
		 $firstname = mysql_real_escape_string(trim($_POST["firstname"]));
		 $lastname =mysql_real_escape_string(trim( $_POST["lastname"]));
		 $confirmpassword = mysql_real_escape_string(trim( $_POST["confirmpassword"]));
		 $password = mysql_real_escape_string(trim( $_POST["password"]));
		// $username =mysql_real_escape_string(trim( $_POST["username"]));
		 $email =mysql_real_escape_string(trim($_POST["email"]));
		 $phone =mysql_real_escape_string(trim($_POST["phone"]));
		 $country = mysql_real_escape_string(trim($_POST["country"]));
		 $state = mysql_real_escape_string(trim($_POST["state"]));
		 $gender = mysql_real_escape_string(trim($_POST["gender"]));
		 
		 
		$avatar = "path to the avatar";
		$approved = 1;
		$level = 1;
		$timeofreg = time();
		$last_log = "NIL";
		
		
		function generateRandomString($length = 4, $letters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqretuvwxyz'){
			$s = '';
		$lettersLength = strlen($letters)-1;

		for($i = 0 ; $i < $length ; $i++)
		{
			$s .= $letters[rand(0,$lettersLength)];
		}

		return $s;
		} 
		
		$username = $lastname.generateRandomString();
		
		
		
		
			$query1 = mysql_query("SELECT * FROM `users` WHERE `email`='$email'");
			
			
			$num = mysql_num_rows($query1);
			if($num>=1){
				$message = "<span style='color:red;'>The Email address you entered is not available</span>";
				$_SESSION["message"] = $message;
				header("location:register.php");
				
			}else{
			
			if($password!=$confirmpassword){
				
				$message = "<span style='color:red;'>You password do not match</span>";
				$_SESSION["message"] = $message;
				header("location:register.php");
			}else{
				
			
$query = mysql_query("INSERT INTO `users`(`firstname`,`lastname`,`email`,`password`,`country`,`state`,`tel`,`gender`,`username`,`timeofreg`,`avatar`,`level`) VALUES ('$firstname','$lastname','$email','$password','$country','$state','$phone','$gender','$username','$timeofreg','$avatar','$level')");
			
				if($query){
				
				$body="<html>
				<head>
				<title>HTML email</title>
				</head>
				<body>
				<div id='mailsub' class='notification' align='center'>

<table width='100%' border='0' cellspacing='0' cellpadding='0' style='min-width: 320px;'><tr><td align='center' bgcolor='#eff3f8'>


<!--[if gte mso 10]>
<table width='680' border='0' cellspacing='0' cellpadding='0'>
<tr><td>
<![endif]-->

<table border='0' cellspacing='0' cellpadding='0' class='table_width_100' width='100%' style='max-width: 680px; min-width: 300px;'>
	<!--header -->
	<tr><td align='center' bgcolor='#eff3f8'>
		<div style='height: 20px; line-height: 20px; font-size: 10px;'>&nbsp;</div>
		<table width='96%' border='0' cellspacing='0' cellpadding='0'>
			<tr><td align='left'>
			<div class='mob_center_bl' style='float: left; display: inline-block; width: 115px;'>
					<table class='mob_center' width='115' border='0' cellspacing='0' cellpadding='0' align='left' style='border-collapse: collapse;'>
						<tr><td align='left' valign='middle'>
							<div style='height: 20px; line-height: 20px; font-size: 10px;'>&nbsp;</div>
							<table width='115' border='0' cellspacing='0' cellpadding='0' >
								<tr><td align='left' valign='top' class='mob_center'>
									<a href='index.html#' target='_blank' style='color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;'>
									<font face='Arial, Helvetica, sans-seri; font-size: 13px;' size='3' color='#596167'>
									<img src='http://completeskills.com/dvbbank/_/media/Images/D/Dvb-Bank-Corp/logo/logofa20.jpg?h=51&la=en&w=174' alt='Logo' border='0' style='display: block;' /></font></a>
								</td></tr>
							</table>						
						</td></tr>
					</table></div><!-- Item END--><!--[if gte mso 10]-->
					</td>
					<td align='right'>
				
				<div class='mob_center_bl' style='float: right; display: inline-block; width: 88px;'>
					<table width='88' border='0' cellspacing='0' cellpadding='0' align='right' style='border-collapse: collapse;'>
						<tr><td align='right' valign='middle'>
							<div style='height: 20px; line-height: 20px; font-size: 10px;'>&nbsp;</div>
							<table width='100%' border='0' cellspacing='0' cellpadding='0' >
								<tr><td align='right'>
									
									
									
								</td></tr>
							</table>
						</td></tr>
					</table></div></td>
			</tr>
		</table>
		<div style='height: 30px; line-height: 30px; font-size: 10px;'>&nbsp;</div>
	</td></tr>
	
	<tr><td align='center' bgcolor='#ffffff'>
		<table width='90%' border='0' cellspacing='0' cellpadding='0'>
			<tr><td align='center'>
				<div style='height: 100px; line-height: 100px; font-size: 10px;'>&nbsp;</div>
				<div style='line-height: 44px;'>
					<font face='Arial, Helvetica, sans-serif' size='5' color='#57697e' style='font-size: 34px;'>
					<span style='font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;'>
						Welcome to DVBBANK
					</span></font>
				</div>
				<div style='height: 30px; line-height: 30px; font-size: 10px;'>&nbsp;</div>
			</td></tr>
			<tr><td align='center'>
				<div style='line-height: 30px;'>
					<font face='Arial, Helvetica, sans-serif' size='5' color='#4db3a4' style='font-size: 17px;'>
					<span style='font-family: Arial, Helvetica, sans-serif; font-size: 17px; color: #4db3a4;'>
						Hi ".$lastname.", your registration is completed!
					</span></font>
				</div>
				<div style='height: 35px; line-height: 35px; font-size: 10px;'>&nbsp;</div>
			</td></tr>
			<tr><td align='center'>
						<table width='80%' align='center' border='0' cellspacing='0' cellpadding='0'>
							<tr><td align='center'>
								<div style='line-height: 24px;'>
									<font face='Arial, Helvetica, sans-serif' size='4' color='#57697e' style='font-size: 16px;'>
									<span style='font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;text-align: justify;'>
										
You will be notified once we are done processing your request, Thanks.
										
										<br><br>
										 At DVB, we make deals work. This means striving to seek and develop intelligent and appropriate solutions that meet and even exceed our clients’ needs and expectations. <br /><br />
										<font face='Arial, Helvetica, sans-serif' size='5' color='#4db3a4' style='font-size: 17px;'>
					<span style='font-family: Arial, Helvetica, sans-serif; font-size: 17px; color: #4db3a4;'>
						Thanks Again , Welcome aboard !!!
					</span></font>
										
									</span></font>
								</div>
							</td></tr>
						</table>
				<div style='height: 45px; line-height: 45px; font-size: 10px;'>&nbsp;</div>
			</td></tr>
			<tr><td align='center'>
				<div style='line-height:24px;'>
					<a href='http://completeskills.com/dvbbank/index.php' target='_blank' style='color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;'>
						<font face='Arial, Helvetica, sans-seri; font-size: 13px;' size='3' color='#596167'>
							<img src='http://completeskills.com/images/confirm-reg.gif' width='225' height='43' alt='CONFIRM REGISTRATION' border='0' style='display: block;' /></font></a>
				</div>
				<div style='height: 100px; line-height: 100px; font-size: 10px;'>&nbsp;</div>
			</td></tr>
		</table>		
	</td></tr>
	
	<tr><td align='center' bgcolor='#f9fafc'>
		<table width='100%' border='0' cellspacing='0' cellpadding='0'>
			<tr><td align='center'>
				<div style='height: 30px; line-height: 30px; font-size: 10px;'>&nbsp;</div>
        
			</td></tr>
			<tr><td><div style='height: 30px; line-height: 30px; font-size: 10px;'>&nbsp;</div></td></tr>
		</table>		
	</td></tr>
	
	
</table>

</td></tr>
</table>

 
</td></tr>
</table>
			
</div> 
				</body>
				</html>";
				$email2 =$_POST["email"];
			$user_email="";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From:DVBBANK <noreply@skylearn.com>" . "\r\n";
			$subject="REGISTRATION SUCCESSFUL";
			
		if(mail($email,$subject,$body,$headers)){
			
			
			
			$message="<span style='color:green;'>Your registration was successfull, we would get back to you as soon as we finish processing your request</span>";
			$_SESSION['message'] = $message;
			header('location:register.php');
			
		}
				
				}else{
					
					$message = "<span>An unknown error occurred</span>";
					$_SESSION["message"] = $message;
					header("location:register.php");
				}
			}
			
			
			
			}
		
		
	}else{
					$message = "<span>You need to fill in all fields</span>";
					$_SESSION["message"] = $message;
					header("location:register.php");
	}




?>