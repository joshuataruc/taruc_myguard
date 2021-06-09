<?php 

include '../dbase.php';
$resident_id = mysqli_real_escape_string($con, $_POST['resident_id']);
$house_id = mysqli_real_escape_string($con, $_POST['house_id']);
$vis_mode = mysqli_real_escape_string($con, $_POST['vis_mode']);
$vis_type = mysqli_real_escape_string($con, $_POST['vis_type']);
$vis_name = mysqli_real_escape_string($con, $_POST['vis_name']);
$vis_plate_num = mysqli_real_escape_string($con, $_POST['vis_plate_num']);
$vis_cont_num = mysqli_real_escape_string($con, $_POST['vis_cont_num']);
$vis_date = mysqli_real_escape_string($con, $_POST['vis_date']);
$vis_expected_time = mysqli_real_escape_string($con, $_POST['vis_expected_time']);
$visitor_id = mysqli_real_escape_string($con, $_POST['visitor_id']);

$update_visitor = "UPDATE visitor_mode_tbl SET resident_id = '$resident_id', house_id = '$house_id', visitor_mode = '$vis_mode', visitor_plate_num = '$vis_plate_num',	visitor_name = '$vis_name', visitor_contact_num = '$vis_cont_num', visitor_expected_date = '$vis_date', visitor_expected_time = '$vis_expected_time', visitor_type = '$vis_type' WHERE  visitor_id = '$visitor_id'";
if (mysqli_query($con, $update_visitor) === TRUE) {
	header('location:../view_visitor.php');
}
else{
	die($con->error);
}

 ?>
