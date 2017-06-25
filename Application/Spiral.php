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
		<h2 style="font-family: calibri; color: #A0522D">Spiral</h2> 
		<table border="1" style="font-family: calibri"> 
			<tr> <th> Hall Availability </th> 
				<th> Allocation</th>
				<th> Maximum Hours </th>
				<th> Pending Request </th>
				<th> Completed Request </th>
			</tr>
			
				
<?php
	$selectString="SELECT * FROM adminpool WHERE name like 'Spiral'";
	$Item1=mysqli_query($con,$selectString);
	
	while($row=mysqli_fetch_array($Item1)){?>
		<tr>
			<td><?php echo $row['status']?></td>
			<td><?php echo $row['max_allow']?></td>
			<td><?php echo $row['max_no_of_hours']?></td>
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