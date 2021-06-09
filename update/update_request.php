<?php 
include '../dbase.php';

$req_id = mysqli_real_escape_string($con, $_POST['req_id']);
$req_type = mysqli_real_escape_string($con, $_POST['req_type']);
$res_id = mysqli_real_escape_string($con, $_POST['res_id']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);
$update_req = "UPDATE request_tbl SET request_type = '$req_type', resident_id = '$res_id', comment = '$comment' WHERE request_id = '$req_id'";
if (mysqli_query($con, $update_req) === true) {
	header('location:../request.php');
}
else{
	die($con->error);
}
 ?>