<?php

include('../dbconn.php');/*include the database connection page*/
	
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$conno=$_POST['contact'];
	$std=$_POST['std'];
	$id=$_POST['sid'];
	$img=$_FILES['image']['name'];/* field and then name of the any knd of pictures file*/
	$temp =$_FILES['image']['tmp_name'];/* creat temp file to temporary sotre the image name 	*/
	
	move_uploaded_file($temp,"../dataimg/$img");/*this command move the file sorce to the destination(s,d)*/
	$query="UPDATE `student` SET `roll no` = '$rollno', `name` = '$name', `city` = '$city', `contact` = '$conno', `standard` = '$std' WHERE `student`.`id` = '$id'; ";

    	$run=mysqli_query($conn,$query);
	
	if($run == TRUE)
	{
		
		?>
		<script> 
				alert('data updated  successfully');
				window.open('updateform.php?sid=<?php echo $id; ?>)','_self');
		</script>
		<?php
	}

?>

