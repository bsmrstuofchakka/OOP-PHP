<?php require_once "classFile.php";?>

<?php
	$id =$_GET['id'];
	
	$user = new User();
	$user->delete_user($id);

?>