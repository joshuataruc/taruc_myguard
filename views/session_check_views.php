<?php
session_start();

if ($_SESSION['username'] && $_SESSION['id'] && $_SESSION['rc_code']) {
  
}
else{
  echo "<script type='text/javascript'>alert('You need to LOGIN')</script>";
  header('location:../login.php');
}
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$rc_code = $_SESSION['rc_code'];
$rc_name = $_SESSION['rc_name'];
$dbname = $_SESSION['dbname'];

$username = false;
$id = false;
$rc_code = false;	

 ?>
