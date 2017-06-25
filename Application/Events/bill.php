<html>
<head>
<title>Paying Page</title>
</head>

<?php
        require 'db_connect.php';
		
		$ResultSet  = $con->query("SELECT * FROM customers WHERE customer_ID='$customerId'");

			while($row = $str_ResultSet ->fetch_array()) 
			{		
			  $_SESSION['Title']			= $row['title'];
			  $_SESSION['FirstName']		= $row['first_Name'];
			  $_SESSION['LastName']		= $row['last'];		
			  $_SESSION['Phone']			= $row['phone'];
			  $_SESSION['Email']			= $row['email'];		
			}		
			
		$results1 = $con->query("UPDATE room SET room_no='$roomno', charge_per_night='$charge'no HWERE room_no='$roomno'");
			
			while($row1 = $results1 ->fetch_array()) 
			{
			  $_SESSION['Room_no'] 		= $row1['room_no'];
			  $_SESSION['Customre_ID']	= $row1['customer_ID'];
			  $_SESSION['Name']		    = $row1['name'];
			  $_SESSION['Bed_type']		= $row1['bed_type'];
			  $_SESSION['Pool_status']	= $row1['pool_status'];
			  $_SESSION['Charge']         = $row['charge_per_night'];
			  $_SESSION['NO']			    = $row['no'];
			}
		
					
		$results2 = $con->query("UPDATE hall SET hall_no='$hallno', type='$type', name = '$name', price='$price' WHERE hall_no='$hallno'");
		
			while($row2 = $results2 ->fetch_array()) 
			{
				$_SESSION['Hall_no'] 		= $row2['hall_no'];
				$_SESSION['Customre_ID']	= $row2['customer_ID'];
				$_SESSION['Type']		    = $row2['type'];
				$_SESSION['HName']		    = $row2['name'];
				$_SESSION['NO']	            = $row1['no'];
				$_SESSION['Pool_status']    = $row['pool_status'];
				$_SESSION['Price']			    = $row['price'];
			}
	 
	  	$results3 = $con->query("UPDATE services SET spa='$spa', pool='$pool', gym = '$gym' WHERE room_no='$room_no'");
		
		while($row3 = $results3 ->fetch_array()) 
			{
				$_SESSION['RoomNo'] 		= $row3['room_no'];
				$_SESSION['Spa']	        = $row3['spa'];
				$_SESSION['Gym']		    = $row3['gym'];
				$_SESSION['Pool']		    = $row3['pool'];
				
			}
	 
?>

<body>
<form id="frmProfile" name="frmProfile" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >

  <table>
  <tr>
  <td>Title</td>
  <td><?php echo $_SESSION['Title']; ?></td>
  </tr>
  <tr>
  <td>First Name</td>
  <td><?php echo $_SESSION['FirstName']; ?></td>
  </tr>
  <tr>
  <td>Room</td>
  <td><?php echo $_SESSION['Name']; ?></td>
  <td><?php echo $_SESSION['Charge']; ?></td>
  </tr>
  <tr>
  <td>Hall</td>
  <td><?php echo $_SESSION['HName']; ?></td>
  <td><?php echo $_SESSION['Price']; ?></td>
  </tr>
  </table>
</form>

</body>
</html>

 