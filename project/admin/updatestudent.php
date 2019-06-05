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

<table align="center">
<form action="updatestudent.php" method="post">
<tr>
<th>Enter standard</th>
 <td><input type="number" name="std" placeholder="Enter Standard" required></td><br>

<th>Enter Student</th>
 <td><input type="text" name="stuname" placeholder="Enter student name"></td>

 <td colspan="2"><input type="submit" name="submit" value="search"/></td>
</tr>
</form>
</table>

<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr style="background-color:#000; color:#fff">
<th> No</th>
<th>Image</th>
<th>Name</th>
<th>Roll No</th>
<th>Edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	include('../dbconn.php');
	$standard=$_POST['std'];
	$name=$_POST['stuname'];
	
	$sql = "SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%' ";
	$run = mysqli_query($conn,$sql);/*run the from the deta base and then match */
	
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='5' align='center' color=blue'>No Record Found</td></tr>";
	}
	else
	{
		$cnt=0;
		while($data=mysqli_fetch_assoc($run))/*checking atleast the searching result are present or not*/
		{ 
	      $cnt++;/*if present then incremented*/
			?>
			<tr>
			<td align="center"><?php echo $cnt;?></td> 
			<td><img src="../dataimg/<?php echo $data['image']?>" style="max=width:100px;"/></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['roll no'] ?></td>
			<td><a href="updateform.php?sid=<?php echo $data['id']; ?>"> Edit </a></td>
			</tr>
					
			
			<?php
		}
		
	}
	
	
	
}
?>

</table>

