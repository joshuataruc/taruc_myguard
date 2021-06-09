<?php 

include '../dbase.php';

$resident_id = mysqli_real_escape_string($con, $_GET['resident_id']);


$delete_resident = "DELETE FROM resident_tbl WHERE resident_id = '$resident_id'";
if (mysqli_query($con, $delete_resident) === TRUE) {
	header('location:../resident.php');
}
else{
	die($con->error);
}

?>