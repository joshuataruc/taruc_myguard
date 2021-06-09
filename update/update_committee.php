<?php 

include '../dbase.php';

$comt_id = mysqli_real_escape_string($con, $_POST['comt_id']);
$house_id = mysqli_real_escape_string($con, $_POST['house_id']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$cont_num = mysqli_real_escape_string($con, $_POST['cont_num']);
$position = mysqli_real_escape_string($con, $_POST['position']);

$update_comt = "UPDATE committee_tbl SET house_id = '$house_id', fname = '$fname', lname = '$lname' , contact_no ='$cont_num' , position = '$position' WHERE com_id = '$comt_id' ";
if (mysqli_query($con, $update_comt) === true) {
	header('location:../committee.php');
}
else{
	die($con->error);
}

	


 ?>