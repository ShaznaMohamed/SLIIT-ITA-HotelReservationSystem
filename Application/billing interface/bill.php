<?php
    require 'db_connect.php';
?>

<!DOCTYPE html>

<html>
	<head>
		<title> Hotel Payment </title>
	</head>
	
	<body>
		<?php
		$sql1= "SELECT * FROM customer";
		$res1= mysqli_query($con, $sql1);
		
		$fname= $_POST['firstname'];
		$lname= $_POST['lastname'];
		$moblie= $_POST['mobilenumber'];
		$email= $_POST['e-mail'];
		$room= $_POST['roomtype'];
		
		while ($property = mysql_fetch_field($result))
 	    {
  				echo "First Name: " . $fname . "<br />";
 				echo "Last Name: " . $lname . "<br />";
  				echo "Mobile Phone Number: " . $mobile . "<br />";
  				echo "E-mail Address: " . $email . "<br />";
  				echo "Room Type: " . $room . "<br />";
  		}
		
		?>
	</body>
</html> 