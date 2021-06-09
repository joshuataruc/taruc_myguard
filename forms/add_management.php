<?php include 'session_check_views.php'; ?>
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
				<form action="../insert/add_management.php" method="post">
					<div class="row">
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="fname">First name</label>
							<input type="text" name="fname" id="fname" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="lname">Last name</label>
							<input type="text" name="lname" id="lname" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="email">Email</label>
							<input type="email" name="email" id="emai"l class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control" required >
							<span id="pass-message"></span>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="con-password">Confirm Password</label>
							<input type="password" name="con-password" id="con-password" class="form-control" required ><br>
							<input type="submit" name="" class="float-right btn btn-primary" id="submit-btn" value="Add Management">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/confirm_password.js"></script>
</body>
</html>