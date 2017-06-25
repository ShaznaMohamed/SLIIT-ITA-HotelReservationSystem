<?php
   $mysql_host= "localhost";
   $mysql_user= "root";
   $mysql_pass= "";
   
   $mysql_db="hotel_database";
   
   $con = mysqli_connect("localhost", "root", "", "hotel_database");
   
   if (mysqli_connect_error()){
   	echo "Failed to connect to MYSQL: ".mysqli_connect_error();
   }
?>