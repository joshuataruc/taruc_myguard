<?php 

include 'dbase.php';
$request_date = date("Y-m-d H:i:s");
$req_type = mysqli_real_escape_string($con, $_POST['req_type']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);
$res_id = mysqli_real_escape_string($con, $_POST['res_id']);
$insert_request = "INSERT INTO request_tbl (resident_id, request_date_time, request_type, comment) VALUES('$res_id', '$request_date', '$req_type', '$comment')";
if (mysqli_query($con, $insert_request) === true) {
	header('location:../request.php');
}
else{
	die($con->error);
}


 ?>