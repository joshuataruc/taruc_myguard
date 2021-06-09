<?php 

include '../dbase.php';

$fac_id = mysqli_real_escape_string($con, $_POST['fac_id']);
$facility_type = mysqli_real_escape_string($con, $_POST['facility_type']);

$update_fac = "UPDATE facility_tbl SET facility_type = '$facility_type' WHERE facility_id = '$fac_id' ";
if (mysqli_query($con, $update_fac) === true) {
	header('location:../facility.php');
}
else{
	die($con->error);
}

 ?>