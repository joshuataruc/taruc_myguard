<?php 

include '../dbase.php';

$visitor_id = mysqli_real_escape_string($con, $_GET['visitor_id']);


$delete_visitor = "DELETE FROM visitor_mode_tbl WHERE visitor_id = '$visitor_id'";
if (mysqli_query($con, $delete_visitor) === TRUE) {
	header('location:../visitor.php');
}
else{
	die($con->error);
}

?>