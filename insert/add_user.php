<?php 
include 'dbase.php';

$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$user = mysqli_real_escape_string($con, $_POST['username']);
$pass = mysqli_real_escape_string($con, md5($_POST['pass']));
$rc_code = mysqli_real_escape_string($con, $_POST['rc_code']);
$access_type = mysqli_real_escape_string($con, $_POST['access_type']);

$add_user_function = "INSERT INTO users_tb (username, password, residence_code, access_type, first_name, last_name) VALUES ('$user', '$pass', '$rc_code', '$access_type', '$fname', '$lname')";

if (mysqli_query($con,$add_user_function) === TRUE) {
	header('location:../user.php');
}
else{
	die($con->error);
}


 ?>