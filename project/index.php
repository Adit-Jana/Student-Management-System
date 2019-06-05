<!DOCTYPE HTML>
<html lan="en_US">
<html>
<head>
<meta charset="	UTF-8">
<title>Student Management System</title>
</head>
<body style="background-color:powderblue;">

<h1 style="color:red;font-size:300%" align="center"> WELCOME TO <sub>STUDENT</sub> MANAGEMENT <sub>SYSTEM</sub></h1>
<h5 align="right" style="margin-right:30px;"><a href="login.php"> Admin Login </a></h5>


<form method="post"  action="index.php">

<table style="width:50%"; align="center"; border="1">
    <tr>
 	     <td colspan="2" align="center">Student Info</td>
	</tr>
	
	<tr>
	<td align="right">Standard</td> 
	<td>
	<input type="text" name="std" required>
	
    
	</td>
	</tr>
	
	<tr>
	<td align="right">Student Roll No</td>
	<td><input type="text" name="rollno" required></td>
	</tr>
	<tr>
	<td align="center"colspan="2"><input type="submit" name="submit" value="Show Me"></td>
	
	
</table>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];
	include('dbconn.php');
	include('function.php');
	
	showdetails($standard,$rollno);
}
else
{
	?><script> alert('no student found')</script>
	<?php
}



?>