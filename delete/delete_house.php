<?php 
include '../dbase.php';

$house_id = mysqli_real_escape_string($con, $_GET['house_id']);
$delete_house = "DELETE FROM house_tbl WHERE house_id = '$house_id' ";
if (mysqli_query($con, $delete_house) ===  true) {
	header('location:../house.php');
}
else{
	die($con->error);
}


 ?>