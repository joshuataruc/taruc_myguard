<?php 

include '../dbase.php';

echo $reply_complain_fac = mysqli_real_escape_string($con, $_GET['reply_complain_fac']);
$complain_status_facility = mysqli_real_escape_string($con, $_GET['complain_status_facility']);
$fac_reply_id = mysqli_real_escape_string($con, $_GET['fac_reply_id']);



if (empty($reply_complain_fac) === true) {
	$facility_reply_update = "UPDATE facility_booking_tbl SET  facility_stat = '$complain_status_facility' WHERE facility_book_id = '$fac_reply_id' ";
	$facility_query = mysqli_query($con, $facility_reply_update) or die($con->error);
}
elseif (empty($complain_status_facility) == true) {
	$facility_reply_update = "UPDATE facility_booking_tbl SET admin_reply = '$reply_complain_fac' WHERE facility_book_id = '$fac_reply_id' ";
	$facility_query = mysqli_query($con, $facility_reply_update) or die($con->error);
}
else{
	$facility_reply_update = "UPDATE facility_booking_tbl SET admin_reply = '$reply_complain_fac',  facility_stat = '$complain_status_facility' WHERE facility_book_id = '$fac_reply_id' ";
	$facility_query = mysqli_query($con, $facility_reply_update) or die($con->error);
}



 ?>