<?php
    error_reporting(E_ALL ^ E_DEPRECATED);  //connect to the database
$mysql_host = "localhost"; 
$mysql_user = "root"; 
$mysql_pass = "";
$mysql_db = "hotel_database";
if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass) ||!mysql_select_db($mysql_db)) 

{

die(mysql_error());

}


?>