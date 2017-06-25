  
  
   <?php
         session_start(); 
         require 'db_connect.php';  
		  
   ?>
   

  
  <!DOCTYPE >
   <html>
   <head>
   	<style>
   		body{
   			background-color:  	#F0E6D9;
  		font-family: calibri;
   		}
   		
   		#tad1{
   			width: 600px;
   			height: 300px;
   			margin-left: 100px;
   			size: 40px;
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
			 
		     require 'db_connect.php';  
		if   ((isset( $_POST["Event"] )) && (isset ($_POST["numbers"] )) &&  (isset ($_POST["Fixture"])) && ( isset ($_POST["Date"] ))   && (isset ($_POST["session"]))  && ( isset( $_POST["hours"])))
		  
		  {
		  	    $event = $_POST["Event"];
				$number= $_POST["numbers"];
				$fixture= $_POST["Fixture"];
				$date = $_POST["Date"];
				$session = $_POST["session"];
				$hours = $_POST["hours"];
				
				 
		  }
		 
		 else {
			    $error = "One or more fields are not filled";
			    echo $error;
		 }
	  
	  
	     if ( $event=='Meeting' )
			{
				$hall_ID = 18;
				$price = 2500.00;
			}
			
	         if ( $event=='Party' )
			{
				$hall_ID = 06;
			    $price = 1000.00;
			}
			
			 if ( $event=='Workshop' )
			{
				$hall_ID = 07;
				$price = 1000.00;
			}
			
			 if ( $event=='Theatre' )
			{
				$hall_ID = 08;
				$price = 1000.00;
			}
			
	  
	  	  $totalprice = ($price * $number * $hours);
			
		//	$customerId = 124;
			
			// $customerId = $_SESSION['Customer_ID'];
	  
	  	$insertString = "INSERT INTO eventreservation
		 	                 VALUES ('$event', $number , '$fixture', '$date', '$session' ,'$hours',  '$totalprice'  ) ";

			
			if(!mysql_query($insertString)) 
			{
				echo('Error : '.mysql_error());
			} 
			else 
			{
				 echo '  <br/>'; 
				 echo '                              1 record added...   <br><br>' ;
			}
		 
	 
	/*   
	 $resul = "select *
		            from weddingreservation ";
		 
	     $date2=strtotime($date);
	
	while ($row2= mysql_fetch_array($resul))
	{
		$GLOBALS( $row2['Date']);
	}
	 $sql1=  "select *
	           from weddingreservation
	           where $date2 = $row2 " ;

	           
	  
	  
	           
	 $res4 = mysql_query($sql1)  ;
	  
	 $count = mysql_num_rows($res4);
	  
	 if ( $count  == 0 )
	  {
	  	echo "                                      Selected date is available" ;
		
	  }
	  else
	  	 echo "                                     Selected date is not available. Please try for another"; 
	  
	  
	 

	                                          
	       */                       
											  
	 ?>
	
	<table  id="tad1" >
		 
		<tr>
			<td>Selected Event :</td>
			<td><?php  echo $event ;  ?></td>
			 
		</tr>
		<tr>
			<td>Selected Number of Guests:</td>
			<td><?php echo $number; ?></td>
		</tr>
		<tr>
			<td>Selected Fixture set up:</td>
			<td><?php echo $fixture; ?></td>
		</tr>
		<tr>
			<td>Selected  Date :</td>
			<td><?php echo $date; ?></td>
		 
		 
			 
		</tr>
		<tr>
			<td>Selected Session:</td>
			<td><?php echo $session; ?></td>
		</tr>
		<tr>
			<td>Selected Hours :</td>
			<td><?php echo $hours; ?></td>
		</tr>
		 
		 <tr>
			<td>Total Price :</td>
			<td><?php echo $totalprice; ?>LKR</td>
		</tr>
	 </table>
	 <form method="post" action="option.html">
	 <input type="submit" value="Add to Cart"  id="b1"/>
	 </form>
</body>	
 </html>









 