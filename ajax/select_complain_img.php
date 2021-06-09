<?php 

include '../dbase.php';
$complain_id = mysqli_real_escape_string($con, $_GET['select_img']);

 $select_img = "SELECT * FROM complain WHERE complain_id = '$complain_id'";
 $complain_img_query = mysqli_query($con, $select_img) or die($con->error);
		$complain_data = $complain_img_query->fetch_assoc();
		 echo $complain_data['photo'];
//var_dump($complain_data);
?>