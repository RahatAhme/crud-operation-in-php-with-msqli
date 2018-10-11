<?php
	include 'index.php'; 
	$message="";
	require_once "student.php";
	if(isset($_POST['btn'])){
		$message = insert();
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Student</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Name : </td>
				<td><input type="text" name="sName"></td>
			</tr>
			<tr>
				<td>Roll : </td>
				<td><input type="text" name="sRoll"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="sEmail"></td>
			</tr>
			<tr>
				<td>Phone : </td>
				<td><input type="text" name="sPhone"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="Submit"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<?php echo $message ?>
				</td>
			</tr>

		</table>
	</form>
</body>
</html>