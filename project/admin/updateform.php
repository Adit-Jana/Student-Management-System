<?php
session_start();

if(isset($_SESSION['user_id']))
{
	echo "";
}
else
{
	header('location: ../login.php');
}
?>
<?php
include('header.php');
include('title.php');
include('../dbconn.php');
$sid=$_GET['sid'];/*store the unie id data in the in sid var */

$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($conn,$sql); /*run the data and connection*/
$data=mysqli_fetch_assoc($run);

?>

<html>
<body>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:50%;margin-top:40px;">
<tr>
<th>ID</th>
<td><input type="text" name="id" value="<?php echo $data['id']; ?>" required></td>
</tr>

<tr>
<th>Roll No</th>
<td><input type="text" name="rollno" value="<?php echo $data['roll no'];?>" required></td>
</tr>

<tr>
<th>Name</th>
<td><input type="text" name="name" value="<?php echo $data['name'];?>" required></td>
</tr>

<tr>
<th>City</th>
<td><input type="text" name="city" value="<?php echo $data['city'];?>" required></td>
</tr>

<tr>
<th>Contact</th>
<td><input type="text" name="contact" value="<?php echo $data['contact'];?>" required></td>
</tr>

<tr>
<th>Standard</th>
<td><input type="number" name="std" value="<?php echo $data['standard'];?>" required></td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="image" placeholder="Enter Image" required></td>
</tr>

<tr>
   
   <td colspan="2" align="center">
    <input type="hidden" name="sid" value="<?php $data['id']; ?>"/>  
	</td>

<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>

