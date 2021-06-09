<?php 

include 'dbase.php';


$con = mysqli_connect('localhost', 'root', '', $_SESSION['dbname']) or die($con->error);


$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));
$residence_code = $_SESSION['rc_code'];

$insert_management = "INSERT INTO management_table (username, password, residence_code, email, fname, lname) VALUES ('$username','$password', '$residence_code', '$email', '$fname', '$lname')";    

 if ( mysqli_query($con, $insert_management) === TRUE) {
 	header('location:../management.php');
 }
 else{
 	die($con->error);
 }

?>