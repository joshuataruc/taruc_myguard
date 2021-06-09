<?php 

include '../dbase.php';

$date = mysqli_real_escape_string($con, $_GET['req_date']);
// $fac_type = mysqli_real_escape_string($con, $_GET['fac_type']);
// && facility_type = '$fac_type'

// $facility_type = "SELECT * FROM facility_tbl WHERE facility_id = '$fac_type'";
// $facility_query = mysqli_query($con, $facility_type) or die($con->error);
// $facility_data = $facility_query->fetch_assoc();
// echo $facility_type_for_query = $facility_data['facility_type']; 	


$select_date = "SELECT * FROM facility_booking_tbl WHERE req_date = '$date'  ";
$date_query = mysqli_query($con, $select_date);
if ($date_query->num_rows > 0) {
	echo '<h3 class="text-warning">Im Sorry the date ' . $date . ' youve chosen is booked Please Try another date</h3>';
	echo "<script>$('#submit-btn').attr('disabled', true);</script>";
}
else{
	echo '<h3 class="text-primary">Book Now</h3>';
	echo "<script>$('#submit-btn').attr('disabled', false);</script>";
}

 ?>

