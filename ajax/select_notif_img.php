<?php 

include '../dbase.php';
$notif_id = mysqli_real_escape_string($con, $_GET['select_img']);

 $select_img = "SELECT * FROM notification_tbl WHERE id = '$notif_id'";
 $notif_img_query = mysqli_query($con, $select_img) or die($con->error);
		$notif_data = $notif_img_query->fetch_assoc();
		 echo $notif_data['photo'];
//var_dump($complain_data);
?>