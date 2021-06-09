<?php 
include '../dbase.php';
$reply_request = mysqli_real_escape_string($con, $_GET['reply_request']);
echo $request_status = mysqli_real_escape_string($con, $_GET['request_status']);
$request_id = mysqli_real_escape_string($con, $_GET['request_id']);


if (empty($request_status) == TRUE) {
	$update_reply = "UPDATE request_tbl SET admin_reply = '$reply_request' WHERE request_id = '$request_id'  ";
	$reply_query = mysqli_query($con, $update_reply) or die($con->error);

}
elseif(empty($reply_request) == TRUE ){
$update_reply = "UPDATE request_tbl SET status = '$request_status' WHERE request_id = '$request_id'  ";
$reply_query = mysqli_query($con, $update_reply) or die($con->error);
}
else{
$update_reply = "UPDATE request_tbl SET admin_reply = '$reply_request', status = '$request_status' WHERE request_id = '$request_id'  ";
$reply_query = mysqli_query($con, $update_reply) or die($con->error);
}


 ?>
