<?php 
include 'dbase.php';

$rc_code = mysqli_real_escape_string($con, $_SESSION['rc_code']);
$unit_no = mysqli_real_escape_string($con, $_POST['unit_no']);
$blk_st_no = mysqli_real_escape_string($con, $_POST['blk_st_no']);

$insert_house = "INSERT INTO house_tbl (residence_code, unit_no, block_street_no) VALUES('$rc_code', '$unit_no', '$blk_st_no')";
if (mysqli_query($con, $insert_house) === true) {
	header('location:../house.php');
}
else{
	die($con->error);
}

 ?>