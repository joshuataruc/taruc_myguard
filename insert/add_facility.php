<?php 
include 'dbase.php';

$blk_st_no = mysqli_real_escape_string($con, $_POST['blk_st_no']);

$insert_facility = "INSERT INTO facility_tbl (facility_type) VALUES ('$blk_st_no')";
if (mysqli_query($con, $insert_facility) === true) {
	header('location:../facility.php');
}
else{
	die($con->error);
}

 ?>