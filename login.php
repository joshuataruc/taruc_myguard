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
		
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-12">
			<div class="form-container">
				<div class="title">My<span>Guard </span></div>
				<form class="" action="login_connection.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<input type="password" name="pass" id="pass" class="form-control">
				</div>
				<div class="form-group">
					<label for="unique_id">Unique Id</label>
					<input type="unique" name="unique_id" id="unique_id" class="form-control">
				</div>
				<div class="buttons-bottom">
					<a href="index.php" class="back-btn"><i class="fas fa-long-arrow-alt-left"></i></a>
					<input type="submit" name="" value="Login" class="btn btn-primary float-right">
				</div>
			</form>
			</div>
				</div>

				<div class="col-md-6 col-lg-6 col-sm-12 d-none d-sm-block" >
					<img src="image/undraw_authentication_fsn5.svg" class="login-img">
				</div>
			</div>
			<div class="wave">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,0L80,37.3C160,75,320,149,480,165.3C640,181,800,139,960,138.7C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
			</div>
	</div>
</body>
</html>
