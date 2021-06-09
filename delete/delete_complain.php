<?php 

include '../dbase.php';
$complain_id = mysqli_real_escape_string($con, $_GET['complain_id']);

$delete_complain = "DELETE FROM complain WHERE complain_id = '$complain_id' ";
if (mysqli_query($con, $delete_complain) === true) {
	header('location:../complain.php');
}
else{
	die($con->error);
}

 ?>