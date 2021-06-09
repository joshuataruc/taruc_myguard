<?php 
session_start();
$login_con = mysqli_connect('localhost', 'root', '', 'myguardm_connections') or die($con->error);


$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars(md5($_POST['pass']));
$unique_id = htmlspecialchars($_POST['unique_id']);


$select_unique_id = "SELECT * FROM rc_connection WHERE unique_code = '$unique_id'";
	$unique_id_query = mysqli_query($login_con, $select_unique_id) or die($con->error);
	if ($unique_id_query->num_rows == 1) {
		$get_unique_id = $unique_id_query->fetch_assoc();
		$connection = $get_unique_id['db_name'];


		$con = mysqli_connect('localhost', 'root', '', $connection) or die($con->error);
		$check_username = "SELECT * FROM management_table WHERE username = '$username'";
		 $username_query = mysqli_query($con, $check_username) or die($con->error);
		 if ($username_query->num_rows > 0) {
		 	$select_account = "SELECT * FROM management_table WHERE username = '$username' && password = '$password'";
		 	$account_query = mysqli_query($con, $select_account) or die($con->error);
		 	if ($account_query->num_rows == 1) {
		 		$get_user_account = $account_query->fetch_assoc();
		 		$rc_code = $get_user_account['residence_code'];
		 		$select_residence_code = "SELECT * FROM res_code_tbl WHERE residence_code = '$rc_code' ";
		 		$rc_query = mysqli_query($con, $select_residence_code) or die($con->error);
		 		if ($rc_query->num_rows == 1) {
		 			$get_rc_data = $rc_query->fetch_assoc();
		 			 $_SESSION['id'] = $rc_code = $get_user_account['id'];
		 			 $_SESSION['username'] = $rc_code = $get_user_account['username'];
		 			 $_SESSION['name'] = $rc_code = $get_user_account['fname'] .' '. $rc_code = $get_user_account['lname']; ;
		 			 $_SESSION['email'] = $rc_code = $get_user_account['email'];
		 			 $_SESSION['rc_code'] = $rc_code = $get_user_account['residence_code'];
		 			 $_SESSION['rc_name'] = $get_rc_data['residence_name'];
		 			 $_SESSION['dbname'] = $connection;
		 			 header('location:dashboard.php');
		 		}
		 		else{
		 			echo "Residence Code Not Found";
		 		}

		 	}
		 	else{
		 		echo "Username and Password Didnt Match";
		 	}
		 }
		 else{
		 	echo "Username Doesnt Exist";
		 }
	}
	else{
		echo "Wrong Unique Code ";
	}




 ?>