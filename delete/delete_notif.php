<?php 
include '../dbase.php';

$notif_id = mysqli_real_escape_string($con, $_GET['notif_id']);

$del_notif = "DELETE FROM notification_tbl WHERE id = '$notif_id'";
if (mysqli_query($con, $del_notif) === true) {
	header('location:../notification.php');
}
else{
	die($con->error);
}

 ?>