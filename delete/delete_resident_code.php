<?php 

include '../dbase.php';
$res_id = mysqli_real_escape_string($con, $_GET['res_id']);

$delete_complain = "DELETE FROM res_code_tbl WHERE residence_code = '$res_id' ";
if (mysqli_query($con, $delete_complain) === true) {
	header('location:../res_code.php');
}
else{
	die($con->error);
}

 ?>