<?php include "classFile.php";?>

<?php

	

	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$email = $_POST['email'];
		$password =$_POST['password'];
		$district=$_POST['district'];
	}
	$user = new User();
	//print_r(isset($_POST['submit']));
	if(isset($_POST['submit'])){
		//print_r($_POST);
		$user->save_user($_POST);
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Web Development Club</title>
</head>
<body>
	<form method="POST" action="index.php">
		<table class="responsible">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Enter your username "></td> 
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="Enter your email "></td> 
			</tr>
			<tr>
				<td>District</td>
				<td><input type="text" name="district" placeholder="Enter your district "></td> 
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Enter your password "></td> 
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Save" ></td> 
				<td><a href="show.php">Show</a> </td> 
			</tr>
		</table>
	</form>
</hr>
	
</body>
</html>


