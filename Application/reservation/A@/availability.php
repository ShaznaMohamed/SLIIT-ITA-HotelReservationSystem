<!DOCTYPE html>
<html>
<head>
<title>Availability</title>
</head> 
<?php
		if (isset($_POST['updateProfile'])) {
			
		$str_MySqlHost  =  "localhost";    
		$str_Database   =  "hotel_database";       
		$str_UserName   =   "root";         
		$str_Password   =   "";      
		
		$str_dbconnect  = new mysqli($str_MySqlHost, $str_UserName, $str_Password, $str_Database);
		
		echo 	
		
		$Room = $_POST['Room'];
		$Number= $_POST['Number'];
		$datta1= $_POST['data1'];
		$datta2= $_POST['data2'];
		$Adults = $_POST['Adults'];
		$Children = $_POST['Children'];
		
		$results = $str_dbconnect->query("INSERT INTO `hotel_database`.`room_reservaion` (`room_no`, `no_of_rooms`, `checkIn_date`, `chechout_data`, `adults`, `children`) VALUES ('$Room', '$Number', '$datta1', '$datta2', '$Adults','$Children')");
		
		
		
	}

?>			

<body> 
   <h1>YOUR SELECTION</h1>  
   <form name="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
    <table id="table">
    	<tr> 
            <td><b>Selected_Room:</b></td>
            <td> <select name ="Room" id ="Room">      	                 
        	 <option>Delux Courtyard Room</option>
             <option>Terrace Suite</option>
             <option> Royal Suite</option>
             <option> Honeymoon Suite</option>
             <option>Petite Lux Suite</option>
             </select>       
             </td>  
        </tr>
        <tr>
        	<td><b>No_of_Rooms:</b></td>
        	<td><select name ="Number" id ="Number" >
                <option>Number</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                </select>                    
             </td>
        </tr>
   		
        <tr>
      		<td><b>Checkin_Date: </b></td>
      		<td> <input type="date" name="data1" /></td>
      		<td><b>Checkout_Date:</b> </td>
      		<td> <input type="date" name="data2" /></td>
      	</tr>
        <tr>
            <td><b>Adults:</b> </td>
            <td><select name="Adults">
                 <option>-</option>
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5+</option>
                 </select>
                 <label class="alert" for="Adults" name="Adults_error"> </label>
                 </tr>
					
						  <tr>
                       	 <td><b>Children:</b></td>
                       	<td><select name="Children">
                       	<option>-</option>
						 <option>1</option>
						 <option>2</option>
						 <option>3</option>
						 <option>4</option>
						</select>
						 
						 
						
                       <tr>	
						 <td><b>Your Preference:</b></td>
						 <td><input type="checkbox" name="room" value="spa">Spa 
						    <input type="checkbox"  name="room" value="pool">Pool
						    <input type="checkbox"  name="room" value="Gym">Gym
						 </td>
					</tr>	
    
        </table>


<input type="submit" name="updateProfile" id="updateProfile" value="&nbsp;Save&nbsp;" />
</form>
     
</body>
</html>
