<?php
    
	
	$mysql_host = "localhost";
	$mysql_user = "root";
	$mysql_pass = "";
	
	$mysql_db = "hotel_database";
	if(mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db))
	{
		 die(mysql_error());
	}
    
?>