<?php
ob_start();
session_start();
 
$email = $_POST['username'];
$password = $_POST['password']; 

$str_MySqlHost  =  "localhost";    
$str_Database   =  "hotel_database";       
$str_UserName   =   "root";         
$str_Password   =   "";      

$str_dbconnect  = new mysqli($str_MySqlHost, $str_UserName, $str_Password, $str_Database);

$str_ResultSet  = $str_dbconnect->query("SELECT * FROM customers WHERE email = '$email' && password = '$password' ");
 
if(mysqli_num_rows($str_ResultSet) <= 0)
	{
    header('Location: index.php');
	}
else
	{
	session_regenerate_id();	
	
	while($row = $str_ResultSet ->fetch_array()) 
	{
		$_SESSION['sess_user_id'] 	= $row["customer_ID"];
		$_SESSION['sess_username'] 	= $row["username"];
		$_SESSION['Customer_ID'] 	= $row['customer_ID'];
		$_SESSION['Title']		= $row['title'];
		$_SESSION['FirstName']		= $row['first_Name'];
		$_SESSION['LastName']		= $row['last'];
		$_SESSION['Address1']		= $row['address_1'];
		$_SESSION['Address2']		= $row['address_2'];
		$_SESSION['City']		= $row['city'];
		$_SESSION['Zip']		= $row['zip_code'];
		$_SESSION['Country']		= $row['country'];
		$_SESSION['State']		= $row['state'];
		$_SESSION['Phone']		= $row['phone'];
		$_SESSION['Email']		= $row['email'];
		$_SESSION['Password']		= $row['password'];
	}
	
	session_write_close();
	header('Location: home.php');
}
?>