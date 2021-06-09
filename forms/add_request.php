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
				<form action="../insert/add_request.php" method="post">
					<div class="row">
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="req_type">Request</label>
							<select class="browser-default custom-select" name="req_type" required="">
							  <option></option>
							  <option value="Access Card">Access Card</option>
							  <option value="Parking Space">Parking Space</option>
							  <option value="Renovation">Renovation</option>
							</select>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="res_id">Resident ID</label>
							<input type="text" name="res_id" class="form-control" id="res_id" required="">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="comment">Comment</label>
    						<textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
							<br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Add Request">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>