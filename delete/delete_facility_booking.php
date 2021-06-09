<?php 

include '../dbase.php';
$book_id = mysqli_real_escape_string($con, $_GET['book_id']);

$delete_booking = "DELETE FROM facility_booking_tbl WHERE facility_book_id = '$book_id' ";
if (mysqli_query($con, $delete_booking) === true) {
	header('location:../faci_booking.php');
}
else{
	die($con->error);
}

 ?>