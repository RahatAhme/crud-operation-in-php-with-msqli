<?php
	include 'index.php';
	require_once "student.php";
	$selectedId = $_GET['update_id'];
	$query_result = search($selectedId);
	$data = mysqli_fetch_assoc($query_result);
	
	if (isset($_POST['btn'])) {
		update($_POST);
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
				<td>
					<input type="text" name="sName" value="<?php echo $data['student_name']; ?>">
					<input type="hidden" name="update_id" value="<?php echo $data['student_id']; ?>">
				</td>
			</tr>
			<tr>
				<td>Roll : </td>
				<td><input type="text" name="sRoll" value="<?php echo $data['student_roll']; ?>"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="sEmail" value="<?php echo $data['student_email']; ?>"></td>
			</tr>
			<tr>
				<td>Phone : </td>
				<td><input type="text" name="sPhone" value="<?php echo $data['student_phone']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>