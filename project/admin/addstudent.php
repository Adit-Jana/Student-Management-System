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
include('title.php');
?>

<html>
<body>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:50%;margin-top:40px;">
<tr>
<th>ID</th>
<td><input type="text" name="id" placeholder="Enter ID" required></td>
</tr>

<tr>
<th>Roll No</th>
<td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
</tr>

<tr>
<th>Name</th>
<td><input type="text" name="name" placeholder="Enter Name" required></td>
</tr>

<tr>
<th>City</th>
<td><input type="text" name="city" placeholder="Enter city" required></td>
</tr>

<tr>
<th>Contact</th>
<td><input type="text" name="contact" placeholder="Enter Contat No" required></td>
</tr>

<tr>
<th>Standard</th>
<td><input type="number" name="std" placeholder="Enter Standard" required></td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="image" placeholder="Enter Image" required></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>

<?php 
if(isset($_POST['submit']))/*after submitting the form details connect with the database*/
{
	
	include('../dbconn.php');/*include the database connection page*/
	$id=$_POST['id'];
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$conno=$_POST['contact'];
	$std=$_POST['std'];
	$img=$_FILES['image']['name'];/* field and then name of the any kind of pictures file*/
	$temp =$_FILES['image']['tmp_name'];/* creat temp file to temporary sotre the image name 	*/
	
	move_uploaded_file($temp,"../dataimg/$img");/*this command move the file sorce to the destination(s,d)*/
	$query="INSERT INTO `student`(`id`, `roll no`, `name`, `city`, `contact`, `standard`,`image`) VALUES (NULL,'$rollno','$name','$city','$conno','$std','$img')";
	
	$run=mysqli_query($conn,$query);
	
	if($run == TRUE)
	{
		
		?>
		<script> alert('You all SetUp   !!! ');
		</script>
		<?php
	}
	
}
?>