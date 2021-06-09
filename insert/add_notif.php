<?php 
include 'dbase.php';

$unit_add_id = mysqli_real_escape_string($con, $_POST['unit_add_id']);
$notice_msg = mysqli_real_escape_string($con, $_POST['notice_msg']);
$notice_img = mysqli_real_escape_string($con, $_FILES['notice_img']['name']); //file name of photo
$notif_date = date("Y-m-d H:i:s");

if (empty($notif_date)) {
	$insert_complain = "INSERT INTO notification_tbl(Notice_message, date_time, unitAdd_id )VALUES('$notice_msg','$notif_date','$unit_add_id')";
	if (mysqli_query($con, $insert_complain) === true) {
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
	$insert_complain = "INSERT INTO notification_tbl(Notice_message, date_time, unitAdd_id, photo )VALUES('$notice_msg','$notif_date','$unit_add_id', '$notice_img')";
	if (mysqli_query($con, $insert_complain) === true) {
		 header('location:../notification.php');
	}
	else{
		die($con->error);
	}
		


//get the size of the image
// 	$data = getimagesize($_FILES['complain_photo']['tmp_name']);
// echo $width = $data[0];
// echo $height = $data[1];




}


 ?>