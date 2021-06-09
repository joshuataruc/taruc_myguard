<?php 

include 'dbase.php';

$resident_id = mysqli_real_escape_string($con, $_POST['resident_id']);
$house_id = mysqli_real_escape_string($con, $_POST['house_id']);
$vis_mode = mysqli_real_escape_string($con, $_POST['vis_mode']);
$vis_type = mysqli_real_escape_string($con, $_POST['vis_type']);
$vis_name = mysqli_real_escape_string($con, $_POST['vis_name']);
$vis_plate_num = mysqli_real_escape_string($con, $_POST['vis_plate_num']);
$vis_cont_num = mysqli_real_escape_string($con, $_POST['vis_cont_num']);
$vis_expected_time = $_POST['vis_expected_time'];
$vis_date = mysqli_real_escape_string($con, $_POST['vis_date']);
$request_date = date("Y-m-d H:i:s");


$insert_visitor = "INSERT INTO visitor_mode_tbl (resident_id, house_id, visitor_mode,visitor_type, visitor_plate_num, visitor_name, visitor_contact_num, visitor_expected_time, transaction_timestamp, visitor_expected_date)VALUES('$resident_id','$house_id','$vis_mode','$vis_type','$vis_plate_num','$vis_name','$vis_cont_num','$vis_expected_time','$request_date' ,'$vis_date')";
if (mysqli_query($con, $insert_visitor) === true) {
	header('location:../visitor.php');
}
else{
	die($con->error);
}


 ?>