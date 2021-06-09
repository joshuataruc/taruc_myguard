<?php
session_start();

if ($_SESSION['username'] && $_SESSION['id']) {
  
}
else{
  echo "<script type='text/javascript'>alert('You need to LOGIN')</script>";
  header('location:login.php');
}
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$name = $_SESSION['fname'];
$email = $_SESSION['email'];
// $rc_code = $_SESSION['lname'];


 ?>
