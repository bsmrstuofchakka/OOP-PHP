<?php include "cal_function.php";?>



<html >
	<head>
		<title>Web Development Club</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body >
		<form  action="" method="POST">
			<table class="responsible">
				<tr>
					<td>Enter the first input</td>
					<td><input type="number" name="num1"/><td>
				</tr>
				
				<tr>
					<td>Enter the second input</td>
					<td><input type="number" name="num2"/><td>
				</tr>
				<tr>
				<td><input type="submit" name="calculate" value="Calculate"/><td>
				</tr>
			</table>
		
		
		</form>
	</body>


</html>

<?php
	if(isset($_POST['calculate'])){
		$num1= $_POST['num1'];
		$num2=$_POST['num2'];
		
		if(empty($num1)||empty($num2))
			echo "Error!!! Please, given two input";
		else{
			$obj1 = new calculation();
			$obj1->addition($num1,$num2);
			$obj1->subtraction($num1,$num2);
			$obj1->multiplication($num1,$num2);
			$obj1->division($num1,$num2);
		}
		
		
	
		
		//echo $num1+$num2;
		
	}
		
?>