<?php
    require 'DBConnect.php';
?>
<!DOCTYPE html>
<html > 
	<head> 
		 
		<style type="text/css"> 
		th,td{ padding-right:30px;
		padding-left:30px; 
		height:40px; } 
		</style> 
	</head> 
<body  bgcolor="#E4DCBB"> 
	<center> 
		<h2 style="font-family: calibri; color: #A0522D"> Deluxe Courtyard Room</h2> 
		<table border="1" style="font-family: calibri"> 
			<tr> 
				<th> Number of Available Rooms </th> 
				<th> Charge Per Night </th>
				<th> Pending Request </th>
				<th> Complete Request </th>
			</tr>
			
				
<?php
	$selectString="SELECT * FROM adminroom WHERE name like 'Deluxe Courtyard Room'";
	$Item1=mysqli_query($con,$selectString);
	
	while($row=mysqli_fetch_array($Item1)){?>
		<tr>
			<td><?php echo $row['available_room']?></td>
			<td><?php echo $row['charge']?></td>
			<td><?php echo $row['pending']?></td>
			<td><?php echo $row['complete']?></td>
		</tr>
		<?php
	}
	?>
		</table>
		</center>
		</body>
		</html>