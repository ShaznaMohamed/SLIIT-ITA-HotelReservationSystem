<!DOCTYPE html>
<html >
<head>
<title>Comments on ITA</title>
</head>
<body style="background:url(body.jpg) repeat-y ">
<center>
<h1>Comments on ITA</h1>
<h4>
<?php

//saving user entered values to variables
if(isset($_POST["R1"]) && (isset($_POST["C1"]) || isset($_POST["C2"]) || isset($_POST["C3"]) || isset($_POST["C4"]) || isset($_POST["C5"])))
{
$Room_Radio= $_POST["R1"];
$Check1= $_POST["C1"];
$Check2= $_POST["C2"];
$Check3= $_POST["C3"];
$Check4= $_POST["C4"];
$Check5= $_POST["C5"];
}
else
{
$error = "One or more fields are not filled";
echo $error;
}
?>
<table>
<tr>
<td>Type of Room Selected : </td>
<td><?php echo $Room_Radio; ?> </td>
</tr>


</table>
</center> <hr> </h2>
</body>
</html>