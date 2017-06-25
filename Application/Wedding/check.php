   
   <?php
       //  session_start(); 
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
	 
	
		          require 'db_connect.php';  
			 	 
	 	$hall = $_POST["Hall"];
		$number= $_POST["Number"];
		$date = $_POST["Date"];
		$session = $_POST["session"];
		$hours = $_POST["hours"];
		
           
	     	
	
	        if ( $hall=='Flora' )
			{
				$hall_ID = 07;
				$price = 4500.00;
			}
			
	         if ( $hall=='Neon Light' )
			{
				$hall_ID = 02;
			    $price = 5000.00;
			}
			
			 if ( $hall=='Golden' )
			{
				$hall_ID = 03;
				$price = 5000.00;
			}
			
			 if ( $hall=='Romantic' )
			{
				$hall_ID = 04;
				$price = 4500.00;
			}
			
			
			
			
			  		
			
			$totalprice = ($price * $number * $hours);
			
			//$customerId = 124;
			
			// $customerId = $_SESSION['Customer_ID'];
	
		$insertString = "INSERT INTO weddingreservation
		 	                 VALUES ( '$hall_ID' ,   $number , '$date', '$session', '$hours' , '$totalprice'   ) ";

			
			if(!mysql_query($insertString)) 
			{
				echo('Error : '.mysql_error());
			} 
			else 
			{
				 echo '  <br/>'; 
				 echo "   Selected Date is available                           1 record added...   <br><br>" ;
			}
		 
		/* 
		 $resul = "select *
		            from weddingreservation ";
		 
	     $date2=strtotime($date);
	
	while ($row2= mysql_fetch_array($resul))
	{
		$GLOBALS['columndate'] = $row2['Date'];
	}
	 $sql1=  "select *
	           from weddingreservation
	           where $date2 = $columndate " ;

	 
	  
	           
	 $res4 = mysql_query($sql1)  ;
	  
	 $count = mysql_num_rows($res4);
	  
	 if ( $count  == 0 )
	  {
	  	echo "                                      Selected date is available" ;
		
	  }
	  else
	  	 echo "                                     Selected date is not available. Please try for another"; 
	  
	  */
	/*$hallprice =  "SELECT h.price
	               from weddingreservation w, hall h
	               where w.HallID = hall_no ";
	                                          
       $res= mysql_query($hallprice );
	   
	   $ans=mysql_fetch_array($res);
	                         
                       
	                     $tottalPrice  = $ans * $hours * $number;           */
											  
	
  /*	while($row = $str_ResultSet ->fetch_array()) 
	{
		$_SESSION['sess_user_id'] 	= $row["customer_ID"];
		$_SESSION['sess_username'] 	= $row["first_Name"];
		
	}
	 */
	         
	  
	?> 
	     
	   
	 
		<br /> <br />
	<table  id="tad1" >
		<tr>
			<td>Selected Hall :</td>
			<td><?php  echo $hall ;  ?></td>
			 
		</tr>
		<tr>
			<td>Selected Number of Halls :</td>
			<td><?php echo $number; ?></td>
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





