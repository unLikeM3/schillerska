<?php
	$host	= '';
	$user	= '';
	$pass	= '';
	$db		= '';

	$con = mysql_connect($host, $user, $pass);
	mysql_set_charset("UTF8", $con);
	
	if (!$con) {
		die("Cannot connect to database");
	}else{
		mysql_select_db($db) or die('Cannot select database');
	}

?>
