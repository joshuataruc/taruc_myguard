<?php 

include '../dbase.php';

$reply_complain = mysqli_real_escape_string($con, $_GET['reply_complain']);
$complain_status = mysqli_real_escape_string($con, $_GET['complain_status']);
$complain_id = mysqli_real_escape_string($con, $_GET['complain_id']);



if (empty($complain_status) == TRUE) {
	$update_reply = "UPDATE complain SET admin_reply = '$reply_complain' WHERE complain_id = '$complain_id'  ";
	$reply_query = mysqli_query($con, $update_reply) or die($con->error);

}
elseif(empty($reply_complain) == TRUE ){
$update_reply = "UPDATE complain SET status = '$complain_status' WHERE complain_id = '$complain_id'  ";
$reply_query = mysqli_query($con, $update_reply) or die($con->error);
}
else{
$update_reply = "UPDATE complain SET admin_reply = '$reply_complain', status = '$complain_status' WHERE complain_id = '$complain_id'  ";
$reply_query = mysqli_query($con, $update_reply) or die($con->error);
}

?>