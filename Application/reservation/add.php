<?php
    require 'db_connect.php';
?>

	<html>
		<head>
		
		</head>
		<body>
			<?php
			if (isset($_POST["room"]) && isset($_POST["hall"]) && isset($_POST["spa"]) && isset($_POST["gym"]) && isset($_POST["pool"]))
			{
				$r=$_POST["room"];
				$h=$_POST["hall"];
				$s=$_POST["spa"];
				$g=$_POST["gym"];
				$p=$_POST["pool"];
			} 
			else {
				$error= "One or more fields are not filled";
				echo $error;
			}
			?>
			<form method="post" action="option.html">
				<center>
				<p> Select if you want  to add some more to your cart :</p>
				
				<select> <option> <a href="Rooms and Suits.html"> Room </a> </option>
						 <option> <a href="newwed.html"> Wedding  </a> </option>
						  <option> <a href="Events/Meeting&Events.html"> Event </a> </option>
						 <option> <a href="Spa.html"> Spa </a> </option>
						 <option> <a href="Pool/Pools.html"> Pool </a> </option>
						 <option> <a href="Gym.html"> Gym </a> </option>
				</select>
				<br>
				<br>
				<br>
				<br>
				<br>
				<input type="submit" name="submit" value="Add To Cart">
				</center>
 			</form>
		   
		</body>
	</html>