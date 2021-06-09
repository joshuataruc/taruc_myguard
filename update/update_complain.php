<?php 
include '../dbase.php';

$complain_id = mysqli_real_escape_string($con, $_POST['complain_id']);
$res_id = mysqli_real_escape_string($con, $_POST['res_id']);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);
$image_name = mysqli_real_escape_string($con, $_FILES['complain_photo']['name']); //file name of photo

if (empty($image_name)) {
	$update_complain = "UPDATE complain SET resident_id = '$res_id', subject = '$subject', comment = '$comment' WHERE complain_id = '$complain_id'";
	if (mysqli_query($con, $update_complain) === true) {
		header('location:../complain.php');
	}
	else{
		die($con->error);
	}
}
else{
	$image_type = $_FILES['complain_photo']['type'];
	$image_tmp = $_FILES['complain_photo']['tmp_name'];
	 

	$move_image = move_uploaded_file($image_tmp, "../complain_image/$image_name");
	$update_complain = "UPDATE complain SET resident_id = '$res_id', subject = '$subject', comment = '$comment', photo = '$image_name' WHERE complain_id = '$complain_id'";
	if (mysqli_query($con, $update_complain) === true) {
		header('location:../complain.php');
	}
	else{
		die($con->error);
	}
}
?>