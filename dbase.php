<?php
include 'session_check.php';

$con = mysqli_connect('localhost', 'root', '', $_SESSION['dbname']) or die($con->error);



 ?>