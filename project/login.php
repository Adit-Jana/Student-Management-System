<?php
session_start();
if(isset($_SESSION['user_id']))
{
	header('locaion:admin/admindash.php');
}

	
?> 

<!DOCTYPE html>
<html lang="en_US">
<head>
  <meta charset="UTF-8">
  <title> Admin Login</title>
</head>
<body>
<h1 align="center" style="bold; color:green">ADMIN LOGIN</h1>


<form action="login.php" method="post">

<table align="center">
<tr>
<td>Username</td><td><input type="text" name="uname" required ></td>
</tr>
<tr>
<td >Password</td><td><input type="password" name="pass" required ></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
<h3><a href="index.php" style="float:left; margin-right:30px; color:green; font-size:30px;">Back</a></h3>
</tr>
</table>
</body>
</html>

<?php
include('dbconn.php');
if (isset($_POST['login']))
{
	
	$username = $_POST['uname'];
	$password = $_POST['pass'];

    $query = "SELECT * FROM `admin` WHERE `username`  ='$username' AND  `password` ='$password'";
    $run = mysqli_query($conn,$query);/*execute the connection and query */

	$row=mysqli_num_rows($run);/*check at least one output*/
	if($row<1)
	{
		?>
		<script>alert('user name not matched!!');/*alert and refresh the page itself */
		window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data= mysqli_fetch_assoc($run);/*PRINT the id name in this function as a associative array*/
		$id=$data['id'];
		
	    
		
		$_SESSION['user_id']=$id;
		header('location:admin/admindash.php');

	}
}
		
?>