/**
 * @author User
 */

<form name="forme" onsubmit="return formvalidate()">
<script type="text/javascript">
   function formvalidate()
   {
   	
   	var Selected Room=document.forms["forme"]["Room"].value;
   	var No of Rooms=document.forms["forme"]["Number"].value;
   	var Checkin_Date=document.forms["forme"]["Date"].value;
   	var Checkout_Date=document.forms["forms"]["Date"].value;
  
   	
   }
   function isEmpty(elemValue,field){
   	if(elemValue==" "|| elemValue==null){
   		alert("You cannot have"+field+"field empty");
   		return true;
   		
   	}else
   	  return false;
   }
   
    function isEmpty(elemValue,field){
   	if(elemValue==" "|| elemValue==null){
   		alert("You cannot have"+field+"field empty");
   		return true;
   		
   	}else
   	  return false;
   }
   
 function Checkin_Date(elemValue) {
if (elemValue == "Please Choose") {
alert("Choose a Date");
return false;
}
else
return true;
   
 }
 
 function Checkout_Date(elemValue) {
if (elemValue == "Please Choose") {
alert("Choose a Date");
return false;
}
else
return true;
}
   
   
   
   function formvalidate()
   {
   	
   	var Selected Room=document.forms["forme"]["Room"].value;
   	var No of Rooms=document.forms["forme"]["Number"].value;
   	var Checkin_Date=document.forms["forme"]["Date"].value;
   	var Checkout_Date=document.forms["forms"]["Date"].value;
  
   	if(isEmpty(Selected Room))
   	  if(isEmpty(No of Room))
   	    if(Selected Date(Checkin_Date))
   	       if(Selected Date(Checkout_Date))
   	               return true;
   	              else
   	                return true;
   	                else
   	                 return false;
   	                else
   	                  return false;
   	                else
   	                  return false;
   }
   
   
   
   
   
   
   
   
   
   
   
</script>
   
