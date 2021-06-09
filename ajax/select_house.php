<?php 
include '../dbase.php';
$house_id = mysqli_real_escape_string($con, $_GET['house_id']);
$select_house = "SELECT * FROM house_tbl WHERE house_id ='$house_id' ";
$house_query = mysqli_query($con, $select_house) or die($con->error);
$house_data = $house_query->fetch_assoc();
$house_data['unit_no'];
$house_data['block_street_no '];
$house_data['resident_id'];

 ?>