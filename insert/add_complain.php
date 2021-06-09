<!-- if (isset($_POST['prom_vid_btn'])) {
	$video_name = $_FILES['prom_vid']['name'];
	$video_type = $_FILES['prom_vid']['type'];
	$video_tmp = $_FILES['prom_vid']['tmp_name'];
	$video_extension = strtolower(pathinfo($video_name, PATHINFO_EXTENSION));

	if ($video_extension != "mp4" && $video_extension != "mkv") {
		header("location:add_data.php");
		exit;
	}
	else{
		$video = move_uploaded_file($video_tmp, "video/$video_name");
		$insert_video = "INSERT INTO prom_vid (vids) VALUES ('$video_name')";
		if (mysqli_query($con, $insert_video) === TRUE) {
			echo "new promotional video has been added";
		}
	}


} -->
<?php 
include 'dbase.php';

$res_id = mysqli_real_escape_string($con, $_POST['res_id']);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);
$image_name = mysqli_real_escape_string($con, $_FILES['complain_photo']['name']); //file name of photo
$complain_date = date("Y-m-d H:i:s");

if (empty($image_name)) {
	$insert_complain = "INSERT INTO complain(resident_id, date_time, subject, comment)VALUES('$res_id','$complain_date','$subject','$comment')";
	if (mysqli_query($con, $insert_complain) === true) {
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
	$insert_complain = "INSERT INTO complain(resident_id, date_time, subject, comment, photo)VALUES('$res_id','$complain_date','$subject','$comment', '$image_name')";
	if (mysqli_query($con, $insert_complain) === true) {
		header('location:../complain.php');
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