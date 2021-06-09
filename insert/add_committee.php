<?php 

include 'dbase.php';


$house_id = mysqli_real_escape_string($con, $_POST['house_id']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$cont_num = mysqli_real_escape_string($con, $_POST['cont_num']);
$position = mysqli_real_escape_string($con, $_POST['position']);
echo $rc_code = mysqli_real_escape_string($con, $_SESSION['rc_code']);

$insert_commitee = "INSERT INTO committee_tbl(residence_code, house_id, fname, lname, contact_no, position)VALUES('$rc_code','$house_id', '$fname', '$lname', '$cont_num', '$position')";
if (mysqli_query($con, $insert_commitee) === true) {
	header('location:../committee.php');
}
else{
	die($con->error);
}


 ?>