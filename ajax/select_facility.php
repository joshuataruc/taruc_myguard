<?php 

include '../dbase.php';

$fac_id = mysqli_real_escape_string($con, $_GET['fac_id']);

$select_fac = "SELECT * FROM facility_tbl WHERE facility_id ='$fac_id' ";
$fac_query = mysqli_query($con, $select_fac) or die($con->error);
$fac_data = $fac_query->fetch_assoc();
echo $fac_data['facility_type'];

 ?>