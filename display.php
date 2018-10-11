<?php 
	include 'index.php';
	$message ="";
	require_once "student.php";	
	if (isset($_GET['action'])) {
		if ($_GET['action'] =='delete') {
			$selectedId = $_GET['delete_id'];
			$message = delete($selectedId);
		}
	}
	$result = display();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Display Students</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Sl.No.</th>
			<th>Name</th>
			<th>Roll</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</tr>
		<?php while ($data = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?php echo $data['student_id'] ?></td>
				<td><?php echo $data['student_name'] ?></td>
				<td><?php echo $data['student_roll'] ?></td>
				<td><?php echo $data['student_email'] ?></td>
				<td><?php echo $data['student_phone'] ?></td>
				<td>
					<a href="?action=delete&&delete_id=<?php echo $data['student_id'];?>">Delete || </a>
					<a href="update.php?update_id=<?php echo $data['student_id'];?>">Update</a>
				</td>
			</tr>
		<?php } ?>

	</table>
</body>
</html>