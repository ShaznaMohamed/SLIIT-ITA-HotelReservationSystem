<?php

session_start(); 

if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
	header("location: index.php");
	exit();
}
?>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
 
<?php
 
$str_MySqlHost  =  "localhost";    
$str_Database   =  "hotel_database";       
$str_UserName   =   "root";         
$str_Password   =   "";      

$str_dbconnect  = new mysqli($str_MySqlHost, $str_UserName, $str_Password, $str_Database);

if (isset($_POST['deleteProfile'])) {
	 echo "Delete";
	 $customerId = $_SESSION['Customer_ID'];	 
	 echo $customerId;
	 $results2 = $str_dbconnect->query(" DELETE FROM customers WHERE customer_ID = '$customerId'");
		
		printf("Select returned %d rows.\n", $results2->num_rows);
    	printf($results2->num_rows);
		
	if($results2){
		echo "<script type='text/javascript'>alert('Successfully Deleted')</script>";
	}else{
		print 'Error : ('. $str_dbconnect->errno .') '. $str_dbconnect->error;
	}
}

 if (isset($_POST['updateProfile'])) {
	 
	 $customerId = $_SESSION['Customer_ID'];	 
	 $title = $_POST['txtTitle'];
	 $firstName = $_POST['txtFirstName'];
	 $lastName = $_POST['txtLastName'];
	 $address_1 = $_POST['txtAddress1'];
	 $address_2 = $_POST['txtAddress2'];
	 $city = $_POST['txtCity'];
	 $zip = $_POST['txtZip'];
	 $state = $_POST['txtState']; 
	 $phone = $_POST['txtPhone'];	
	 $email = $_POST['txtEmail'];
	 $password = $_POST['txtPassword']; 
	 
	 $results = $str_dbconnect->query("UPDATE customers SET title='$title', first_Name='$firstName', last = '$lastName', address_1='$address_1', address_2='$address_2', city='$city', zip_code='$zip', state='$state', phone='$phone', email = '$email', password = '$password' WHERE customer_ID='$customerId'");


if($results){
    echo "<script type='text/javascript'>alert('Successfully Updated')</script>";
}else{
    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
  }

echo "<script type='text/javascript'>alert('Test')</script>";



$str_ResultSet  = $str_dbconnect->query("SELECT * FROM customers WHERE customer_ID='$customerId'");
	
	while($row = $str_ResultSet ->fetch_array()) 
	{
		$_SESSION['sess_user_id'] 	= $row["customer_ID"];
		$_SESSION['sess_username'] 	= $row["first_Name"];
		$_SESSION['Customer_ID'] 	= $row['customer_ID'];
		$_SESSION['Title']			= $row['title'];
		$_SESSION['FirstName']		= $row['first_Name'];
		$_SESSION['LastName']		= $row['last'];
		$_SESSION['Address1']		= $row['address_1'];
		$_SESSION['Address2']		= $row['address_2'];
		$_SESSION['City']			= $row['city'];
		$_SESSION['Zip']			= $row['zip_code'];
		$_SESSION['Country']		= $row['country'];
		$_SESSION['State']			= $row['state'];
		$_SESSION['Phone']			= $row['phone'];
		$_SESSION['Email']			= $row['email'];
		$_SESSION['Password']		= $row['password'];
	}
	
	session_write_close(); 
}
 ?>
 
<body>
<form id="frmProfile" name="frmProfile" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
<h1>Welcome to your Profile, <?php echo $_SESSION['FirstName'] ?></h1>
<table id="displayProfile" name="displayProfile" width="100%">
<tr>
<td>Title</td>
<td><?php echo $_SESSION['Title']; ?></td>
</tr>
<tr>
<td>First Name</td>
<td><?php echo $_SESSION['FirstName']; ?></td>
</tr>
<tr>
<td>Last Name</td>
<td><?php echo $_SESSION['LastName']; ?></td>
</tr>
<tr>
<td>Address Line 1</td>
<td><?php echo $_SESSION['Address1']; ?></td>
</tr>
<tr>
<td>Address Line 2</td>
<td><?php echo $_SESSION['Address2']; ?></td>
</tr>
<tr>
<td>City</td>
<td><?php echo $_SESSION['City']; ?></td>
</tr>
<tr>
<td>Zip Code</td>
<td><?php echo $_SESSION['Zip']; ?></td>
</tr>
<tr>
<td>State</td>
<td><?php echo $_SESSION['State']; ?></td>
</tr>
<tr>
<td>Country</td>
<td><?php echo $_SESSION['Country']; ?></td>
</tr>
<tr>
<td>Phone</td>
<td><?php echo $_SESSION['Phone']; ?></td>
</tr>
<tr>
<td>E-mail</td>
<td><?php echo $_SESSION['Email']; ?></td>
</tr>
<tr>
<td>Password</td>
<td> Please click edit to update your Password</td>
</tr>

<tr><td colspan="2"><div style="text-align:center">
<input type="button" name="btnEditProfile" id="btnEditProfile" value="&nbsp;Edit Profile&nbsp;" />
<input type="button" id="btnEditProfile" VALUE="&nbsp;&nbsp;Cancel&nbsp;&nbsp;" onClick="history.go(-2);return true;">
</td></div> 
</tr>
<tr><td colspan="2"><div style="text-align:center">
  <img src="last.png" width="126" height="82"  alt=""/> </div></td></tr>
</table>
</table>

<table id="editProfile" name="editProfile" width="100%">
<tr>
<td>Title</td>
<td>
<input type="text" id="txtTitle" name="txtTitle" value="<?php echo $_SESSION['Title']; ?>" />
</td>
</tr>
<tr>
<td>First Name</td>
<td>
<input type="text" id="txtFirstName" name="txtFirstName" value="<?php echo $_SESSION['FirstName']; ?>" />
</td>
</tr>
<tr>
<td>Last Name</td>
<td>
<input type="text" id="txtLastName" name="txtLastName" value="<?php echo $_SESSION['LastName']; ?>" />
</td>
</tr>
<tr>
<td>Address 1</td>
<td>
<input type="text" id="txtAddress1" name="txtAddress1" value="<?php echo $_SESSION['Address1']; ?>" />
</td>
</tr>
<tr>
<td>Address 2</td>
<td>
<input type="text" id="txtAddress2" name="txtAddress2" value="<?php echo $_SESSION['Address2']; ?>" />
</td>
</tr>
<tr>
<td>City</td>
<td>
<input type="text" id="txtCity" name="txtCity" value="<?php echo $_SESSION['City']; ?>" />
</td>
</tr>
<tr>
<td>Zip Code</td>
<td>
<input type="text" id="txtZip" name="txtZip" value="<?php echo $_SESSION['Zip']; ?>" />
</td>
</tr>
<tr>
<td>State</td>
<td>
<input type="text" id="txtState" name="txtState" value="<?php echo $_SESSION['State']; ?>" />
</td>
</tr>
<tr>
<td>Phone</td>
<td>
<input type="text" id="txtPhone" name="txtPhone" value="<?php echo $_SESSION['Phone']; ?>" />
</td>
</tr>
<td>E-mail</td>
<td>
<input type="text" id="txtEmail" name="txtEmail" value="<?php echo $_SESSION['Email']; ?>" />
</td>
</tr>
</tr>
<td>Password</td>
<td>
<input type="text" id="txtPassword" name="txtPassword" value="<?php echo $_SESSION['Password']; ?>" />
</td>
</tr>
<tr><td colspan="2"><div style="text-align:center">
<input type="submit" name="updateProfile" id="updateProfile" value="&nbsp;Save&nbsp;" />

<input type="submit" name="deleteProfile" id="deleteProfile" value="&nbsp;Delete&nbsp;Profile&nbsp;" />

<input type="button" id="updateProfile" VALUE="&nbsp;&nbsp;Cancel&nbsp;&nbsp;" onClick="window.location.replace('home.php')">   
</div></td></tr>

<tr><td colspan="2"><div style="text-align:center">
  <img src="last.png" width="126" height="82"  alt=""/> </div></td></tr>
</table>

<script src="jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$("#editProfile").hide();
	$("#btnEditProfile").click(function(){
		$("#displayProfile").hide();
	  	$("#editProfile").show();
	});
});
</script>

</body>
</html>