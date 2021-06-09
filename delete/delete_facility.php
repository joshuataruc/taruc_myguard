<?php 

include '../dbase.php';

$facility_id = mysqli_real_escape_string($con, $_GET['facility_id']);

$delete_Fac = "DELETE FROM facility_tbl WHERE facility_id = '$facility_id' ";
if (mysqli_query($con, $delete_Fac) === true) {
	header('location:../facility.php');
}
else{
	die($con->error);
}


 ?>