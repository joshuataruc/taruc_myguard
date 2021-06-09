<?php 
include '../dbase.php';
$house_id = mysqli_real_escape_string($con, $_POST['house_id']);
// $res_id = mysqli_real_escape_string($con, $_POST['res_id']);
$unit_no = mysqli_real_escape_string($con, $_POST['unit_no']);
$blk_st_no = mysqli_real_escape_string($con, $_POST['blk_st_no']);

$update_house = "UPDATE house_tbl SET  unit_no = '$unit_no',	block_street_no = '$blk_st_no' WHERE house_id = '$house_id'";
if (mysqli_query($con, $update_house) ===  true) {
	header('location:../house.php');
}
else{
	die($con->error);
}

 ?>