
<!DOCTYPE >
   <html>
   <head>
   	<style>
   		body{
   			background-color: #F0E68C;
  		font-family: calibri;
   		}
   		
   		#tad1{
   			width: 500px;
   			height: 200px;
   			margin-left: 100px;
   		}
   		
   		   #b1{
   	    		color:  #A0522D;
  		margin-left: 1000px;
  		size:20px; 
  		font-size: 20px;
	    font-family: calibri;
   	    }	 
   	</style>
   </head>
	<body>
	
	
	<?php     
			 
		     
		if   ((isset( $_POST["Room_Type"] )) && (isset ($_POST["No_Of_Rooms"] )) &&  ( isset ($_POST["Checkin_date"] )) && ( isset ($_POST["Checkout_date"]))  && (isset( $_POST["Adults"]))  && (isset ($_POST["Children"]))  && ( isset( $_POST["Your_Preferens"])))
		  
		  {
		  	    $hall = $_POST["Room_Type"];
				$number= $_POST["No_Of_Rooms"];
				$date = $_POST["Checkin_date"];
				$month = $_POST["Checkout_date"];
				$year = $_POST["Adults"];
				$session = $_POST["Children"];
				$hours = $_POST["Your_Preferens"];
				
				 
		  }
		 
		 else {
			    $error = "One or more fields are not filled";
			    echo $error;
		 }
	  
	 ?>
	<br /> <br />
	<table  id="tad1" >
		<tr>
			<td> Room_Type:</td>
			<td><?php  echo $Room_Type ;  ?></td>
			 
		</tr>
		<tr>
			<td>No_Of_Rooms :</td>
			<td><?php echo $No_Of_Rooms; ?></td>
		</tr>
		<tr>
			<td>Checkin_date :</td>
			<td><?php echo $Checkin_date; ?></td>
		 
		 
			<td> Checkout_date :</td>
			<td><?php echo $Checkout_date; ?></td>
		 
		 
			<td> Adults :</td>
			<td><?php echo $Adults; ?></td>
		</tr>
		<tr>
			<td>Children:</td>
			<td><?php echo $Children; ?></td>
		</tr>
		<tr>
			<td>Your Preferens :</td>
			<td><?php echo $Your_Preferens; ?></td>
		</tr>
	</table>
	
	<form method="post" action="chamalayya.php">
	 <input type="submit" value="Reserve"  id="b1"/>
	 </form>
	
</body>	
 </html>





