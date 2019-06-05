<?php

session_start();

if(isset($_SESSION['user_id']))
{
	echo "";
}
else
{
	header('location:../login.php');
}

?>
<?php 
include('header.php');
?>

<div class="admintitle">
<h1 align="center">Welcom To Admin Dashboard</h1>
<h2><a href="logout.php" style="float:right; margin-right:30px; color:red; font-size:20px;">Log Out</a></h2>
</div>

<div class="dashboard">
<table border="1" align="center" style="width:50%">
<tr>
<td>1</td><td><a href="addstudent.php">Add student</a></td>
</tr>

<tr>
<td>2</td><td><a href="updatestudent.php">Update student</a></td>
</tr>

<tr>
<td>3</td><td><a href="deletestudent.php">Delete student</a></td>
</tr>
</table>
</div>