<?php
 
		require 'db_connect.php';
		

		

     if(isset($_POST["guesttitle"]) && isset($_POST["guestfirstname"]) && isset($_POST["guestlastname"]) 
     && isset($_POST["addressline1"]) && isset($_POST["addressline2"]) && isset($_POST["city"]) 
     && isset($_POST["zipcode"]) && isset($_POST["state"]) && isset($_POST["country"]) && isset($_POST["guestphone"]) 
     && isset($_POST["guestemail"]) && isset($_POST["confirmemail"]) && isset($_POST["specialrequests"]))
	 {
	 	 $title = $_POST["guesttitle"];
	 	 $first_Name = $_POST["guestfirstname"];
	 	 $last_Name = $_POST["guestlastname"];
		 $address_1 = $_POST["addressline1"];
		 $address_2 = $_POST["addressline2"];
		 $city = $_POST["city"];
		 $zipcode = $_POST["zipcode"];
		 $state = $_POST["state"];
		 $country = $_POST["country"];
		 $phone = $_POST["guestphone"];
		 $email = $_POST["guestemail"];
		 $con_email = $_POST["confirmemail"];
		 $special_req = $_POST["specialrequests"];
		 
	 }
	 	 else 
	 	 {
	 	 	$error = "One or more fields are not filled";
	 	 	echo $error; 
		 }
		
		if(isset($_POST["insert"]))
		{
			$insertString = "INSERT INTO hotel_database VALUES('$title','$first_Name','$last_Name','$phone','$address_1','$address_2',
			'$city','$email','$con_email','$state','$zipcode','$country','$special_req',)";
			
			if(!mysql_query($insertString)) 
			{
				die('Error : '.mysql_error());
			} 
			else 
			{
				 echo '<br/>'; 
				 echo '1 record added...';
			}
		}
?>









