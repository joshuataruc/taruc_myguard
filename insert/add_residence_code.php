<?php 

include 'dbase.php';

$rc_name = mysqli_real_escape_string($con, $_POST['rc_name']);
$rc_connect = mysqli_real_escape_string($con, $_POST['rc_connect']);
$rc_add1 = mysqli_real_escape_string($con, $_POST['rc_add1']);
$rc_add2 = mysqli_real_escape_string($con, $_POST['rc_add2']);
$rc_add3 = mysqli_real_escape_string($con, $_POST['rc_add3']);
$rc_contact_person = mysqli_real_escape_string($con, $_POST['rc_contact_person']);
$rc_contact_number = mysqli_real_escape_string($con, $_POST['rc_contact_number']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$post_code = mysqli_real_escape_string($con, $_POST['post_code']);
$district = mysqli_real_escape_string($con, $_POST['district']);
$state = mysqli_real_escape_string($con, $_POST['state']);


$residence_code = "INSERT INTO res_code_tbl (residence_name, residence_connect, residence_add1, residence_add2, residence_add3, contact_person, contact_no, email, post_code, district, state) VALUES ('$rc_name', '$rc_connect', '$rc_add1', '$rc_add2', '$rc_add3', '$rc_contact_person', '$rc_contact_number', '$email', '$post_code', '$district', '$state')";

if (mysqli_query($con, $residence_code) === TRUE ) {
	header('location:../residence_code.php');
}
else{
	die($con->error);
}

 ?>