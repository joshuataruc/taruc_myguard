<?php 
include 'dbase.php';


$facility_id = mysqli_real_escape_string($con, $_POST['facility_id']);
$req_date = mysqli_real_escape_string($con, $_POST['req_date']);
$hr = mysqli_real_escape_string($con, $_POST['hr']);
$min = mysqli_real_escape_string($con, $_POST['min']);
$time_period = mysqli_real_escape_string($con, $_POST['time_period']);
$res_id = mysqli_real_escape_string($con, $_POST['res_id']);
//$status = mysqli_real_escape_string($con, $_POST['status']);
$transac_time = date("Y-m-d H:i:s");

$insert_facility_booking = "INSERT INTO facility_booking_tbl (resident_id, facility_type, req_date, hr, min, time_period, transac_date_time)VALUES('$res_id', '$facility_id', '$req_date', '$hr', '$min', '$time_period', '$transac_time')";

if (mysqli_query($con, $insert_facility_booking) === true) {
	header('location:../faci_booking.php');
}
else{
	die($con->error);
}

 ?>