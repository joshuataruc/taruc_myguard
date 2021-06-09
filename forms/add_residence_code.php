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
				<form action="../insert/add_residence_code.php" method="post">
					<div class="row">
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="rc_name">Residence Name</label>
							<input type="text" name="rc_name" id="rc_name" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="rc_connect">Residence Connect</label>
							<input type="text" name="rc_connect" id="rc_connect" class="form-control" required>
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="rc_add1">Residence Address 1</label>
							<input type="text" name="rc_add1" id="rc_add1" class="form-control" required>
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="rc_add2">Residence Address 2</label>
							<input type="text" name="rc_add2" id="rc_add2" class="form-control">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="rc_add3">Residence Address 3</label>
							<input type="text" name="rc_add3" id="rc_add3" class="form-control">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="rc_contact_person">Contact Person</label>
							<input type="text" name="rc_contact_person" id="rc_contact_person" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="rc_contact_number">Contact Number</label>
							<input type="text" name="rc_contact_number" id="rc_contact_number" class="form-control"  required onkeypress='validate(event)' onpaste="return false;"><!-- onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" -->
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="post_code">Post Code</label>
							<input type="post_code" name="post_code" id="post_code" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="district">District</label>
							<input type="text" name="district" id="district" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="state">State</label>
							<input type="text" name="state" id="state" class="form-control" required><br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Add Residence Code">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="js/number_only_input.js"></script>
</body>
</html>