<?php 

include '../dbase.php';
$id = mysqli_real_escape_string($con, $_POST['id']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));


if (empty($password) === true) {
	$update_mgnt = "UPDATE management_table SET username = '$username', email = '$email', fname = '$fname', lname = '$lname' WHERE  id = '$id' ";
	if (mysqli_query($con, $update_mgnt) === TRUE) {
	header('location:../management.php');
	}
	else{
		die($con->error);
	}
	
}
else{
	$update_mgnt = "UPDATE management_table SET username = '$username', email = '$email', fname = '$fname', lname = '$lname', password = '$password' WHERE  id = '$id' ";
	if (mysqli_query($con, $update_mgnt) === TRUE) {
	header('location:../management.php');
		
	}
	else{
		die($con->error);
	}
}
		 
 ?>