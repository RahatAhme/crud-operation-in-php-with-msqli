<?php 
	require_once "student.php";
	$query_reslult = rolllist();
	if (isset($_POST['btn'])) {
		deletebyroll($roll);
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Delete</title>
 </head>
 <body>
 	<form action="" method="post">
 		<select>
 			<option>Select A Roll No</option>
	 		<?php while ($option = mysqli_fetch_assoc($query_reslult)) { 
	 			$roll=$option['student_roll']; ?>
	 			<option value="<?php echo $roll;?>"><?php echo $option['student_roll']; ?></option>
	 		<?php } ?>
 		</select>
 		<input type="submit" name="btn" value="Delete">
 	</form>
 </body>
 </html>