<?php

include('../dbconn.php');/*include the database connection page*/
	
	
	$id=$_REQUEST['sid'];
	$query="DELETE FROM `student` WHERE `id`='$id';";

    	$run=mysqli_query($conn,$query);
	
	if($run == TRUE)
	{
		
		?>
		<script> 
				alert('data Deleted  successfully');
				window.open(('deletestudent.php'),'_self');
		</script>
		<?php
	}

?>
