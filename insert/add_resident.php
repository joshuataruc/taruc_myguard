<?php 
include 'dbase.php';

$house_id = mysqli_real_escape_string($con, $_POST['house_id']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$cont_num = mysqli_real_escape_string($con, $_POST['cont_num']);
$res_type = mysqli_real_escape_string($con, $_POST['res_type']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));

$insert_resident = "INSERT INTO resident_tbl (house_id, fname, lname, contact_num, password, resident_type) VALUES ('$house_id', '$fname', '$lname',  '$cont_num', '$password', '$res_type')";
if (mysqli_query($con, $insert_resident)=== TRUE) {
	header('location:../resident.php');
}
else{
	die($con->error);
}	





?>