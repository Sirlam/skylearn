<?php

	/*
	 * Connect to the database
	 */
	function db_connect ($host,$user,$password){
		if (mysql_connect($host,$user,$password)){
			return true;
		}else {
			return false;
		}
	}
	
	/*
	 * Select the Database
	 */
	 
	function db_select ($database_name){
		if(mysql_select_db($database_name)){
			return true;
		}else {
			return false;
		}
	}
	
	/*
	 * SELECT ALL ELEMENT FROM A TABLE
	 */
	function select_all ($table){
		$query=mysql_query("SELECT * from `$table`");
		if($query){
			return true;
		}else{
			return mysql_error();
		}
	}
	/*
	 * Publish the site
	 */
	 
	function publish(){
		$query = mysql_query("SELECT * FROM `live`");
		$row = mysql_fetch_assoc($query);
		$live = $row['live'];
		if($live == 2){
			$_SESSION['comeback'] = "comeback";
			
		}
	}


	
?>