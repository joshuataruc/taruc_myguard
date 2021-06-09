<?php 
include '../dbase.php';

$commitee_id = mysqli_real_escape_string($con, $_GET['commitee_id']);

$del_comt = "DELETE FROM committee_tbl WHERE com_id = '$commitee_id'";
if (mysqli_query($con, $del_comt) === true) {
	header('location:../committee.php');
}
else{
	die($con->error);
}

 ?>