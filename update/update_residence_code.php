<?php 

include '../dbase.php';
$rc_id = mysqli_real_escape_string($con, $_POST['rc_id']);
$rc_name = mysqli_real_escape_string($con, $_POST['rc_name']);
$rc_add1 = mysqli_real_escape_string($con, $_POST['rc_add1']);
$rc_add2 = mysqli_real_escape_string($con, $_POST['rc_add2']);
$rc_add3 = mysqli_real_escape_string($con, $_POST['rc_add3']);
$rc_contact_person = mysqli_real_escape_string($con, $_POST['rc_contact_person']);
$rc_contact_number = mysqli_real_escape_string($con, $_POST['rc_contact_number']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$post_code = mysqli_real_escape_string($con, $_POST['post_code']);
$district = mysqli_real_escape_string($con, $_POST['district']);
$state = mysqli_real_escape_string($con, $_POST['state']);


$update_res_code = "UPDATE res_code_tbl SET  residence_name ='$rc_name', residence_add1 = '$rc_add1', residence_add2 = '$rc_add2', residence_add3 = '$rc_add3', contact_person = '$rc_contact_person', contact_no = '$rc_contact_number', email = '$email', post_code = '$post_code', district = '$district', state = '$state' WHERE residence_code = '$rc_id'";
if (mysqli_query($con, $update_res_code) === true) {
	header('location:../views/view_res_code.php');
}
else{
	die($con->error);
}


?>