<?php 
include '../dbase.php';

$notif_id = mysqli_real_escape_string($con, $_POST['notif_id']);
$unit_add_id = mysqli_real_escape_string($con, $_POST['unit_id']);
$notice_msg = mysqli_real_escape_string($con, $_POST['notice_msg']);
$notice_img = mysqli_real_escape_string($con, $_FILES['notice_img']['name']);//file name of photo


			 	


if (empty($notice_img)) {
	$update_notif = "UPDATE notification_tbl SET unitAdd_id = '$unit_add_id', Notice_message = '$Notice_message' WHERE id = '$notif_id'";
	if (mysqli_query($con, $update_notif) === true) {
		header('location:../notification.php');
	}
	else{
		die($con->error);
	}
}
else{
	$image_type = $_FILES['notice_img']['type'];
	$image_tmp = $_FILES['notice_img']['tmp_name'];
	 

	$move_image = move_uploaded_file($image_tmp, "../notif_img/$notice_img");
	$update_notif = "UPDATE notification_tbl SET unitAdd_id = '$unit_add_id', Notice_message = '$Notice_message', photo = '$notice_img' WHERE id = '$notif_id'";
	if (mysqli_query($con, $update_notif) === true) {
		header('location:../notification.php');
	}
	else{
		die($con->error);
	}
}
?>