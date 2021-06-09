<?php 
include '../dbase.php';

$fac_book_id = mysqli_real_escape_string($con, $_POST['fac_book_id']);
$facility_id = mysqli_real_escape_string($con, $_POST['facility_id']);
$res_id = mysqli_real_escape_string($con, $_POST['res_id']);
$req_date = mysqli_real_escape_string($con, $_POST['req_date']);
$hr = mysqli_real_escape_string($con, $_POST['hr']);
$min = mysqli_real_escape_string($con, $_POST['min']);
$time_period = mysqli_real_escape_string($con, $_POST['time_period']);

$update_facility_booking = "UPDATE facility_booking_tbl set facility_type ='$facility_id', resident_id = '$res_id', req_date ='$req_date', hr = '$hr', min = '$min', time_period = '$time_period'";
if (mysqli_query($con, $update_facility_booking) === true) {
	header('location:../facility_booking.php');
}
else{
	die($con->error);
}


 ?>