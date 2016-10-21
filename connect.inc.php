<?php
	
	include "functions.php";
	
	$host_name = "localhost";
	$user_name = "root";
	$password_user = ""; 
	
	$database_name = "alpha";
	
	if(!db_connect ($host_name,$user_name,$password_user)){
		
		echo mysql_error();
	}
	
	if(!db_select ($database_name)){
		
		echo mysql_error();
	}
	//error_reporting(0);
	

?>