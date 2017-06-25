<?php

   require'db_connect.php';
  // session_start();
   
?>

<!DOCTYPE >
   <html>
   <head>
   	<style>
   		body{
   			background-color:  	#E4DCBB;
  		font-family: calibri;
   		}
   		
   		#tad1{
   			width: 500px;
   			height: 200px;
   			margin-left: 100px;
   		}
   		
   		   #b1{
   		   	border-radius:2em;
   	    		background-color:#F4A460;
   	    		color:#A0522D;
  		margin-left: 1000px;
  		size:20px; 
  		font-size: 20px;
	    font-family: calibri;
   	    }	 
   	</style>
   </head>
	<body>
	
	
	<?php     
			 
		require'db_connect.php';     
		/*if   ((isset( $_POST["Room"] )) && (isset ($_POST["Number"] )) && (isset($_POST["data1"])) && (isset($_POST["data2"])) && (isset($_POST["Adults"]))&& (isset($_POST["Children"])))*/
		  
		  
		  	
		  	    $Room = $_POST["Room"];
				$Number= $_POST["Number"];
				$datta1= $_POST["data1"];
			    $datta2= $_POST["data2"];
				$Adults = $_POST["Adults"];
				$Children = $_POST["Children"];
				
				if( $Room == 'Delux Courtyard Room')
						$roomprice=45000;
					
					if ($Room == 'Terrace Suite') {
						$roomprice=35000;
					}
					
					if ($Room == 'Royal Suite') {
						$roomprice=55000;
					}
					
					if ($Room == 'Honeymoon Suite') {
						$roomprice=65000;
					}
					
					if ($Room == 'Petite Lux Suite') {
						$roomprice=60000;
					}
					
					
					
					
						
					$price =( $Number * $roomprice );
				//$customer_ID = $_session['Customer_ID'];
				$customer_ID= 123;
		  	$insertString = "INSERT INTO room_reservation VALUES ('$Room', $Number, $datta1, $datta2, $Adults,$Children, '$customer_ID' , $price )";
 			if(!mysql_query($insertString))
			
		{
				
			echo('Error : '.mysql_error());
			
			} 
			
			else 
			{
	
 				echo '  <br/>'; 
		
				echo '  1 record added...   <br><br>' ;
			
				}
					
					
					
				/*else
					 {
			    $error = "One or more fields are not filled";
			    echo $error;
		 }*/
					 /*if(isset($_POST["insert"]))
					 {
					 	$insertString="INSERT INTO room_reservation VALUES('$Room', $Number, $datta1, $datta2, $Adults,$Children)" ;
					 }*/
	  
				/*if(!mysql_query($insertString))
				{				
					die('Error : '.mysql_error());
					
				}
						 
		  
		  
		
				else {
					echo '<br/>';
					echo'1 record added...<br><br>';
					
				}*/
				
				/*$sql1="  select *
				         from room_reservation
				         where $datta1 and $datta2";*/
				         
				         /*select rt.roomno 
				         from room rt, room_details rd
				          where rt.roomno-rd.roomno and (Format([rt.check_in_date], 'MM/dd/yyyy')) not between 'Selectdate' and 'Selectdate' and (
				          Format([rt.check_out_date], 'MM/dd/yyyy')) not between 'Selectdate' and 'Selectdate';
				        /*where( ( checkindate >= '9/12/2014' and checkindate < '9/17/2014' )
            
						  *              or ( checkoutdate >= '9/12/2014' and checkoutdate < '9/17/2014' ) )*/

						  /*function room_available($roomno,$datta1,$datta2)
				 {
				 $sql1="SELECT*
				        FROM room_reservation
				        WHERE roomno=$roomno AND Checkin_Date<=$datta1 AND Checkout_Date<=$datta2 ";
				             
				
				 $res4 = mysql_query($sql1)  ;
	            /* $count = mysql_num_rows($res4);*/
				/*if(mysql_num_rows($res4)>0)
				  /*if($count==0)*/
				/*  {
				  	echo"Selected date is not avialable.Please try for another";
				  }
				  else{ 
				   
				           
	         echo"Selected date is available";
				  }
				 }
				 * 
				 */
				?>          
				  
				
				
				 
		  
		  
		 
	  
	 
	<br /> <br />
	<table  id="tad1" >
		<tr>
			<td>Selected Room :</td>
			<td><?php  echo $Room ;  ?></td>
			 
		</tr>
		<tr>
			<td>Selected Number of Rooms :</td>
			<td><?php echo $Number; ?></td>
		</tr>
		
		
		<tr>
			<td>Checkin_Date :</td>
			<td><?php echo $datta1; ?></td>
		 
		 
			
		</tr>
		
		<tr>
			<td>Checkout_Date :</td>
			<td><?php echo $datta2; ?></td>
		 
		 
			
		</tr>
		
		<tr>
			<td>Adults:</td>
			<td><?php echo $Adults; ?></td>
		</tr>
		<tr>
			<td>Children:</td>
			<td><?php echo $Children; ?></td>
		</tr>
		<tr>
			<td>Total price : </td>
			<td><?php echo $price; ?></td>
		</tr>
	</table>
	
	<form method="post" action="option.html">
	 <input type="submit" value="Reserve"  id="b1"/>
	 </form>
	
</body>	
 </html>





