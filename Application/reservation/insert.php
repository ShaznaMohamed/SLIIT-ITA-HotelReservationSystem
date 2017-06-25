<?php
 
		require 'db_connect1.php';
		
		
		 
	 	 $title = $_POST["title"];
	 	 $first_Name = $_POST["guestfirstname"];
	 	 $last = $_POST["guestlastname"];
		 $address_1 = $_POST["addressline1"];
		 $address_2 = $_POST["addressline2"];
		 $city = $_POST["city"];
		 $zipcode = $_POST["zipcode"];
		 $state = $_POST["state"];
		 $country = $_POST["country"];
		 $phone = $_POST["guestphone"];
		 $email = $_POST["guestemail"];
		 $special_req = $_POST["specialrequests"];
		 $password = $_POST["password"];

	
			$insertString = "INSERT INTO customers(title,first_name,last,phone,address_1,address_2,city,email,state,zip_code,country,password,special_req) 
			VALUES('$title','$first_Name','$last',$phone,'$address_1','$address_2','$city','$email','$state',$zipcode,'$country','$password','$special_req')";

			
			if(!mysql_query($insertString)) 
			{
				echo('Error : '.mysql_error());
			} 
			else 
			{
				header("Location:option.html");
			}
			
			
			


	
?>









