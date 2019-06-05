<?php

function showdetails($standard,$rollno)
{
	include('dbconn.php');
	$query="SELECT * FROM `student` WHERE `roll no`='$rollno' AND `standard`='$standard'";
	$run=mysqli_query($conn,$query);
	
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<table border="1" style="width:50%; margin-top:20px;" align="center">
		<tr>
		<th colspan="3">Student Details</th>
		</tr>
		
		<tr>
		<td rowspan="6"><img src="dataimg/<?php echo $data['image'];?>" style="max-width:120px"; ></td>
		</tr>
		
		<tr>
		<th>Roll No</th>
		<td><?php echo $data['roll no'];?></td>
		</tr>
		
		<tr>
		<th>Name</th>
		<td><?php echo $data['name'];?></td>
		</tr>
		
		<tr>
		<th>Standard</th>
		<td><?php echo $data['standard'];?></td>
		</tr>
		
		<tr>
		<th>Contact No</th>
		<td><?php echo $data['contact'];?></td>
		</tr>
		
		<tr>
		    <th>City Name</th>
		    <td><?php echo $data['city'];?></td>
		</tr>
		</table>
		
		
		<?php
	}
	
	
}



?>