<?php 
include '../dbase.php';
$resident_id =  mysqli_real_escape_string($con, $_POST['resident_id']);
$house_id = mysqli_real_escape_string($con, $_POST['house_id']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$cont_num = mysqli_real_escape_string($con, $_POST['cont_num']);
$res_type = mysqli_real_escape_string($con, $_POST['res_type']);

$update_resident = "UPDATE resident_tbl  SET house_id = '$house_id', fname = '$fname', lname = '$lname', contact_num = '$cont_num', resident_type = '$res_type' WHERE  resident_id = '$resident_id'";
if (mysqli_query($con, $update_resident) === TRUE) {
	header('location:../resident.php');
}
else{
	die($con->error);
}


 ?>