<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>
<body>
	<div class="container-fluid">
		<div class="form-container form-center">
			<div class="logo-text">
				<h4>MYGUARD Login</h4>
			</div>
			<form class="" action="login_process.php" method="post">
				<div class="form-group">

					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<input type="password" name="pass" id="pass" class="form-control">
				</div>
				<div class="buttons-bottom">
					<a href="index.php" class="back-btn"><i class="fas fa-long-arrow-alt-left"></i></a>
					<input type="submit" name="" value="login" class="login-btn">
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>