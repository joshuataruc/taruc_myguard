<?php
include 'session_check_views.php';

$con = mysqli_connect('localhost', 'root', '', $_SESSION['dbname']) or die($con->error);



 ?>