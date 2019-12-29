<?php require_once "classFile.php"; ?>


<?php
	
	$id= $_GET['id'];
	//print_r($id);

	$user= new User();
	$data=$user->edit_user($id);
	$data = mysqli_fetch_assoc($data);
	//print_r($data);

	
	$username=$data['username'];
	$email=$data['email'];
	$password=$data['password'];
	$district=$data['district'];

	//echo $id."<br>".$username."<br>".$email."<br>".$password."<br>".$district;

	//print_r($_POST);
	if(isset($_POST['submit'])){
		$user->edit_user_update($_POST);
	}


?>



<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Web Development Club</title>
</head>
<body>
	<form method="POST" action="">
		<table class="responsible">
			
			<?php if (isset($data['username']) &&!empty($data['username'])) {  ?>
				<input type="hidden" name="id"  value="<?php $data['id']?>">
			
		 	<?php } ?>



			

			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $username?>" placeholder="Enter your username "></td> 
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $email?>" placeholder="Enter your email "></td> 
			</tr>
			<tr>
				<td>District</td>
				<td><input type="text" name="district" value="<?php echo $district?>"  placeholder="Enter your district "></td> 
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $password?>"  placeholder="Enter your password "></td> 
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Update" ></td> 
			</tr>
			<tr>
				<td><a href="show.php">Show</a> </td>
				<td><a href="index.php">Index</a> </td> 
			</tr>
		</table>
	</form>
</hr>
	
</body>
</html>