<?php 
	
	$link = mysqli_connect("localhost","root","","db_student");
	if (!$link) {
		die("Connection Failed.Please try again ".mysqli_error($link));
	}

	function insert(){
		global $link;
		$sql = "INSERT INTO tbl_student (student_name,student_roll,student_email,student_phone) VALUES('$_POST[sName]','$_POST[sRoll]','$_POST[sEmail]','$_POST[sPhone]')";
		if(mysqli_query($link,$sql)){			
			$message="Student has been inserted successfully";
			return $message;
		}else{
			die("Some Thing is going wrong ".mysqli_error($link));
		}
	}

	function display(){
		global $link;
		$sql = "SELECT * FROM tbl_student";
		if (mysqli_query($link,$sql)) {
			$result = mysqli_query($link,$sql);
			return $result;
		}else{
			die("Some Thing is going wrong ".mysqli_error($link));
		}
	}

	function delete($deleteId){
		global $link;
		$sql = "DELETE FROM tbl_student WHERE student_id = '$deleteId'";
		if (mysqli_query($link,$sql)) {
			$message = "Selected Student's information has been deleted";
			return $message;
		}else{
			die("Something is going wrong. ".mysqli_error($link));
		}
	}

	function search($update_id){
		global $link;
		$sql = "SELECT * FROM tbl_student WHERE student_id = '$update_id'";
		if (mysqli_query($link,$sql)) {
			$query_reslult = mysqli_query($link,$sql);
			return $query_reslult;
		}else{
			die("Something is going wrong. ".mysqli_error($link));
		}
	}

	function update($newData){
		global $link;
		$sql = "UPDATE tbl_student SET student_name='$newData[student_name]',
		student_roll ='$newData[student_roll]',student_email ='$newData[student_email]',
		student_phone='$newData[student_phone]' WHERE student_id='$newData[student_id]'";
		if (mysqli_query($link,$sql)) {
			header('Location:display.php');
		}else{
			die("Something is going wrong. ".mysqli_error($link));
		}
	}

	function rolllist(){
		global $link;
		$sql = "SELECT student_roll FROM tbl_student";
		if (mysqli_query($link,$sql)) {
			$query_reslult = mysqli_query($link,$sql);
			return $query_reslult;
		}else{
			die("Something is going wrong. ".mysqli_error($link));
		}

	}

	function deletebyroll($roll){
		global $link;
		$sql = "DELETE FROM tbl_student WHERE student_roll='$roll'";
		if (mysqli_query($link,$sql)) {
			header('Location:display.php');
		}else{
			die("Something is going wrong. ".mysqli_error($link));
		}
	}
 ?>
 