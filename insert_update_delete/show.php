<?php include "classFile.php";?>
<?php

	$user = new User(); 
	$data = $user->all_user();

	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Web Development/Data Show</title>
</head>
<body>

	<table cellspacing="5" cellpadding="5" border="4px" style="text-align: center; color: white; background-color: black; margin: auto;">
		<tr>
			<td >Id</td>
			<td >Username</td>
			<td >Email</td>
			<td >District</td>
			<td >Action</td>
		</tr>
        <?php 
        	while ($row = mysqli_fetch_assoc($data) ){
         ?>
		<tr>
			<td ><?=   $row['id']  ?></td>
			<td ><?=   $row['username']  ?></td>
			<td ><?=  $row['email']  ?></td>
			<td><?=  $row['district']  ?></td>
			<td>
				<a href="edit.php?id=<?=   $row['id']  ?>">Edit</a>
				<a href="delete.php?id=<?=   $row['id']  ?>">Delete</a>
				
			</td>
		</tr>
		<?php 
			}
         ?>


	</table>
	<div style="margin-left: 35%;margin-top: 15px;"><a  href="index.php">Index</a></div>

</body>
</html>