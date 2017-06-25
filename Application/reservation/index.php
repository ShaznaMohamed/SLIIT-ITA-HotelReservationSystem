

<html>
<head>
	<title> Sienna </title>
		
	<link rel="stylesheet" type="text/css" href="css/guestinfo.css" />


<script>
function validateForm() 
{
	{
    	var x = document.forms["myform"]["guestemail"].value;
    	var atpos = x.indexOf("@");
    	var dotpos = x.lastIndexOf(".");
    	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
    	{
        	alert("Not a valid e-mail address");
        	return false;
    	}
   	}
}

</script>
</head>
<body>
	
		<div class="topic">
		<form name="myform" method="post" onsubmit="return validateForm();" action="insert.php">
			<fieldset style="width: 500px">
				<legend><b>Guest Information</b></legend>
					
				<dl>
				
				
				
				<table cellpadding="5">
					<tr>
						<td width="20%" ><label class="label optional" for="guest_title">Title(Mr./Mrs./Ms.)</label><br />
						<input id="title" type="text" value="" name="title" required><br /></td>
					</tr>
					<tr>
						<td width="20%" ><label class="label required" for="guest-fn">First Name*</label><br/>
						<input id="guest-fn" type="text" value="" name="guestfirstname" required></td>
						
						<td width="20%" ><label class="label required" for="guest-Ln">Last Name*</label><br/>
						<input id="guest-Ln" type="text" value="" name="guestlastname" required></td>
						
						
					</tr>
					
					<tr>
						<td width="20%" ><label class="label required" for="guest-add1">Address Line 1*</label><br/>
						<input id="guest-add1" type="text" value="" name="addressline1" required></td>
						
						<td width="20%" ><label class="label required" for="guest-add2">Address Line 2*</label><br/>
						<input id="guest-add2" type="text" value="" name="addressline2" required></td>
					</tr>
					<tr>
						<td width="20%" ><label class="label required" for="guest-city">City*</label><br/>
						<input id="guest-city" type="text" value="" name="city" required></td>
						
						<td width="20%" ><label class="label optional" for="zipcode">Zip Code</label><br/>
						<input id="zipcode" class="" type="text" value="" name="zipcode" ></td>
					</tr>
					
					<tr>
						<td width="20%" ><label class="label optional" for="state">State</label><br/>
						<input id="state" class="" type="text" value="" name="state"></td>
						
						<td width="20%" ><label class="label required" for="country">Country*</label><br/>
						<input id="country" class="" type="text" value="" name="country" required></td>
					</tr>
					
					<tr>
						<td width="20%" ><label class="label required" for="guest-phone">Phone*</label><br/>
						<input id="guestphone" class="formfield" type="text" value="" name="guestphone" required></td>
						
						<td width="20%" ><label class="label required" for="guest-email">Email*</label><br/>
						<input type="text" value="" name="guestemail" id="guestemail" required></td>
					</tr>
					<tr>
					
						<td width="20%" ><label class="label required" for="confirm-email">Password*</label><br/>
						<input id="confirm-email" type="text" autocomplete="off" value="" name="password" required></td>
					
					</tr>
					
					<tr>
						<td colspan="3"><label class="label optional" for="special_requests">Special Requests</label><br/>
						<textarea id="special_requests" cols="80" rows="6" name="specialrequests"></textarea></td>
					</tr>
					
					<tr>
						<td colspan="2"><input id="recieve_email" class="wid20" type="checkbox" value="1" name="recievemail">
						<label class="label optional" for="recieve_email">I would like to receive E-mail offers</label></td><br/>
					</tr>
					<tr>
						<td colspan="2"><input id="terms" type="checkbox" value="1" name="terms" required>
							I have read and I agree to the terms and conditions.
						<a href="Website Terms.doc" target="_blank" >Click here </a>for more details.
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" value="Proceed to pay" name="insert" align="right" >
					</tr>
				</table>		
				</dl>
				
			</fieldset>
		</form>
		<br/>
		<br/>
		</div>

</body>
</html>
