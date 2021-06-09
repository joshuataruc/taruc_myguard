<?php 
include '../dbase.php';

$req_id = mysqli_real_escape_string($con, $_GET['req_id']);

$update_req = "DELETE FROM request_tbl WHERE request_id = '$req_id'";
if (mysqli_query($con, $update_req) === true) {
	header('location:../request.php');
}
else{
	die($con->error);
}
 ?>