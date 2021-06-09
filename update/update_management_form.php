<?php
 include '../dbase.php'; 
$mgnt_id = mysqli_real_escape_string($con, $_GET['mgnt_id']);
$select_mgnt = "SELECT * FROM management_table WHERE id = '$mgnt_id' ";
$mgnt_query = mysqli_query($con, $select_mgnt);
$mgnt_data = $mgnt_query->fetch_assoc();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/add.css">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form action="update_management.php" method="post">
					<div class="row">
						<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $mgnt_data['id'] ?>">
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="fname">First name</label>
							<input type="text" name="fname" id="fname" class="form-control" value="<?php echo $mgnt_data['fname'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="lname">Last name</label>
							<input type="text" name="lname" id="lname" class="form-control" value="<?php echo $mgnt_data['lname'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control" value="<?php echo $mgnt_data['username'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="email">Email</label>
							<input type="email" name="email" id="emai"l class="form-control" value="<?php echo $mgnt_data['email'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control" >
							<small class="text-muted">Leave it Blank if you wont change your Password</small><br>
							<span id="pass-message"></span>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="con-password">Confirm Password</label>
							<input type="password" name="con-password" id="con-password" class="form-control" ><br>
							<input type="submit" name="" class="float-right btn btn-primary" id="submit-btn" value="Update Management">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script>
		
$('#password, #con-password').on('keyup', function(){
	if ($('#con-password').val() == $('#password').val()) {
		$('#pass-message').html('Password Match').css('color', '#007bff ');
		$('#submit-btn').attr('disabled', false);
	}
	else{
		$('#pass-message').html('Password did not Match').css('color', '#dc3545  ');
		$('#submit-btn').attr('disabled', true);

	}
});

	</script>
</body>
</html>