﻿<?php
  	require 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>bill</title>
		<meta name="description" content="">
		<meta name="author" content="Shangavi">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<style>
		
			#d1{
				background-color: #F5F5DC; 
				width: 750px;
				height: 1500px; 
				float: left; 
				font-family: Calibri; 
				margin-left: 50px;
			}
			
			.d2{
				float: left;
				margin-left:30px; 
			}
			
			.d3{
				float:left;
				margin-left: 60px;
			}
			
			#d4{
				background-color: 	#E0FFD1; 
				color: #006400;
				width: 750px;
				height: 50px; 
				float: left; 
				border-style: solid;
				border-width: 1px;
   				border-color: #006400;
				 font-style: normal; 
				font-size: 100%;
			}
			
			#d5{
				float: right;
				width: 750px;
				height: 1200px;
				margin-right: 50px;
				font-family: Calibri;
			}
			
		</style>
		
		<script type="text/javascript">
			function formValidate()
			{
					var firstname = document.forms["card"]["fn"].value;
					var	lastname= document.forms["card"]["ln"].value;
					var	cardtype= document.forms["card"][""].value;
					var cardnumber= document.forms["card"]["cn"].value;
					var cvc= document.forms["card"]["cvcc"].value;
					
					if(isAlphebati(firstname))
						if(isAlphebati(lastname))
							if(selectedCard(cardtype))
								if(isNumeric(cardnumber))
									if(isNumeric(cvc))
										return true;
									else
										return false;
								else 
									return false;
							else 
								return false;
						else
							return false;
					else 
						return false;
							
		    }
		    
		    function isEmpty(elemValue, field)
		    {
		    	if (elemValue == "" || elemValue == null) {
		    		echo "alert ("You cannot have ".field."field empty")";
		    		return true;
		    	}
		    	
		    	else
		    	return false;
		    }
		    
		    function isAlphabetic (elemValue)
		    {
		    	var exp= /^[a-zA-Z]+$/;
		    		if (!isEmpty(elemValue, "firstname")|| !isEmpty(elemValue, "lastname"))
		    		{
		    			if (elemVlaue.match(exp)) {
		    				return true;
		    			}
		    			else{
		    				echo "alert(enter only text for your First name";
		    				return false
		    			}
		    		}
		    		else
		    		return false;
		    }
		    
		    function isNumeric (elemValue)
		    {
		    	
		    		if (!isEmpty(elemValue, "cardnumber")|| !isEmpty(elemValue, "cvc"))
		    		{
		    			var exp= /^[0-9]+$/;
		    			if (elemVlaue.match(exp)) {
		    				return true;
		    			}
		    			else{
		    				echo "alert(enter only text for your First name";
		    				return false
		    			}
		    		}
		    		else
		    		return false;
		    }
		    
		    function selectedCard(elemValue){
		    	if (elemValue== "Select Your Card"){
		    		alert ("Choose a card");
		    		return false;
		    	}
		    	else
		    		true;
		    }
		</script>
	</head>

	<body>
		<div id="d1" style="height: 1500px">
			<form name="bill" method="post" action="bill.php">
				<form name="your detail">
					<div class="d2">
						<h2> Your Details</h2>
						<div class="d3">
							<table cellspacing="20">
								<tr>
										<td>First Name:</td>
										<td>		   </td>
										<td><input type="text" name="fn" ></td>
										</tr>
										
										
										<tr>
										<td>Last Name:</td>
										<td>		   </td>
										<td><input type="text" name="ln" > </td>
										<br/>
										</tr>
										
	
										<tr>
										<td>Moblie Phone Number:</td>
										<td>		   </td>
										<td><input type="text" name="mpn" > </td>
										</tr>
										
										
										<tr>
										<td>E-mail Address:</td>
										<td>		   </td>
										<td><input type="text" name="ead" > </td>
										</tr>
										
										
										<tr>
										<td>Room Type:</td>
										<td>		   </td>
										<td><input type="text" name="rm" > </td>
										</tr>
										
										
										<tr>
										<td> 			        </td>
										<td> Bed Type          </td>
										<td><select>
													<option> 1 double </option>
													<option> 1 single </option>
											</select>
										</td>
										</tr>
							</table>
						</div>
					</div>
				</form>
				
				<br/>
				<br/>
				
				<div id="d4">
					<p align="center">  Your credit card will be charged immediately for the full amount of the booking. </p>
				</div>
				
				<br/>
				
				<form name="card" >
						<div class="d2">
									<h2> Billing Details</h2>
							<div class="d3">
								<table cellspacing="20">
							
										<tr>
										<td>First name as on card:</td>
										<td>		   </td>
										<td><input type="text" name="fn" ></td>
										</tr>
										
										
										<tr>
										<td>Last name as on card:</td>
										<td>		   </td>
										<td><input type="text" name="ln" > </td>
										<br/>
										</tr>
										
	
										<tr>
										<td>Card type:</td>
										<td>		   </td>
										<td><select>
													<option> Select Your Card </option>
													<option> American Express </option>
													<option> Diners Club </option>
													<option> Discovers </option>
													<option> Master Card </option>
													<option> Visa </option>
											</select> </td>
										</tr>
										
										
										<tr>
										<td>Card number:</td>
										<td>								 </td>
										<td><input type="text" name="cn" > </td>
										</tr>
										
										
										<tr>
										<td>Card expiry date:</td>
										<td>		   </td>
										<td><select>		<option> </option>
													<option> 1 </option>
													<option> 2 </option>
													<option> 3</option>
													<option> 4 </option>
													<option> 5 </option>
													<option> 6 </option>
													<option> 7 </option>
													<option> 8</option>
													<option> 9 </option>
													<option> 10 </option>
													<option> 11 </option>
													<option> 12 </option></select>
										</td>
										
										<td><select>		<option> </option>
													<option> 2014 </option>
													<option> 2015 </option>
													<option> 2016</option>
													<option> 2017 </option>
													<option> 2018 </option>
													<option> 2019 </option>
													<option> 2020 </option>
													<option> 2021</option>
													<option> 2022 </option>
													<option> 2023 </option>
													<option> 2024 </option>
													<option> 2025 </option></select>
										</td>
										</tr>
										
										
										<tr>
										<td> CVC Code			        </td>
										<td>           </td>
										<td><input type="text" name="cvcc">
										</td>
										</tr>
						</table>
					</div>
				</div>
				</form>
				
				<br>
				<br>
				<form name="pay">
				
					
					<div class="d3">
						<table cellspacing="20">
							
										<tr>
										<td>Country:</td>
										<td>		   </td>
										<td><select><option> Afghanistan</option>
													<option> Albania </option>
													<option> Algeria</option>
													<option> American Samoa </option>
													<option> Andorra </option>
													<option> Angola </option>
													<option> Anguilla </option>
													<option> Antartica</option>
													<option> Antigua and Barbuda </option>
													<option> Aregentia </option>
													<option> Armenia </option>
													<option> Aruba </option> 
													<option> Australia</option>
													<option> Australia </option>
													<option> Austria</option>
													<option> Azerbaijn </option>
													<option> Bahamas </option>
													<option> Bahrain </option>
													<option> Bangladesh </option>
													<option> Belgium</option>
													<option> Bermuda </option>
													<option> Brazil </option>
													<option> Bouvet Island </option>
													<option> British Indian Ocean territory </option>
													<option> Botswana </option> 
													<option> Burma</option>
													<option> Burundi </option>
													<option> Cambodia</option>
													<option> Canada </option>
													<option> Central African Republic </option>
													<option> Chile </option>
													<option> Christmas Island </option>
													<option> Colombia</option>
													<option> Cuba </option>
													<option> Cyprus </option>
													<option> Denmark</option>
													<option> Dominica </option>
													<option> Egypt</option>
													<option> Estonia </option>
													<option> Ethiopia</option>
													<option> Finland </option>
													<option> France </option>
													<option> Gabon </option>
													<option> Georgia </option>
													<option> Germany</option>
													<option> Greece </option>
													<option> Greenland </option>
													<option> Haiti </option>
													<option> Holy See </option> 
													<option> Homg Kong</option>
													<option> Hungary </option>
													<option> Iceland</option>
													<option> India </option>
													<option> Indonesia </option>
													<option> Iran </option>
													<option> Ireland </option>
													<option> Isarel</option>
													<option> Iraq </option>
													<option> Italy </option>
													<option> Jamaica </option>
													<option> Japan </option>
													<option> Jordan </option> 
													<option> Kenya</option>
													<option> Korea </option>
													<option> Kuwait</option>
													<option> Libya </option>
													<option> Luxemburg </option>
													<option> Macoa </option>
													<option> Madagascar </option>
													<option> Malaysia</option>
													<option> Maladevis </option>
													<option> Mexico </option>
													<option> Nepal</option>
													<option> Netharlands </option>
													<option> New Zealand</option>
													<option> Nigeria </option>
													<option> Norway</option>
													<option> Oman </option>
													<option> Pakistan </option>
													<option> Palestinian </option>
													<option> Panama </option>
													<option> Papua New Guinea</option>
													<option> Peru </option>
													<option> Philippines </option>
													<option> Poland </option>
													<option> Portugal </option> 
													<option> Qatar</option>
													<option> Romania </option>
													<option> Rwanda</option>
													<option> Scotland </option>
													<option> Singapore </option>
													<option> Slovakia </option>
													<option> Solomon Islands </option>
													<option> Somalia</option>
													<option> South Africa </option>
													<option> Spain </option>
													<option> Sri Lanka </option>
													<option> Sudan </option>
													<option> Sweden </option> 
													<option> Switzerland</option>
													<option> Taiwan </option>
													<option> Tanzania</option>
													<option> Thailand </option>
													<option> Turkey </option>
													<option> Timor-Leste</option>
													<option> Togo</option>
													<option> Åland Islands</option>
													<option> Uganda </option>
													<option> Ukraine </option>
													<option> United Arab Emirates </option>
													<option> Unites Kingdom</option>
													<option> United States </option>
													<option> Uruguay </option>
													<option> Sri Lanka
													<option> Venezuela</option>
													<option> Viet Nam </option>
													<option> Virgin Island, British </option> 
													<option> Virgin Island, British </option>
													<option> Western Sahara </option>
													<option> Yeman </option>
													<option> Zambia </option>
													<option> Zimmbabwe </option>
													</select></td>
										</tr>
										
										
										<tr>
										<td>City:</td>
										<td>		   </td>
										<td><input type="text" name="ci" > </td>
										<br/>
										</tr>
										
	
										<tr>
										<td>Address:</td>
										<td>		   </td>
										<td><input type="text" name="ad" > </td>
										</tr>
										
										
										<tr>
										<td>Postal code:</td>
										<td>		   </td>
										<td><input type="text" name="poc" > </td>
										</tr>
									
										
										<tr> </tr>
										
										
										<tr>
										<td> Special Requests. Please write your requests in English.</td>
										<td>           </td>
										<td><textarea rows="5" cols="40"> </textarea>
											
										</td>
										</tr>
						</table>
					</div>
					
				</form>
				<input type="button" name="b1" value="Pay with PayPal" onclick="formValidate()">
			</form>
				
	</body>
</html>
