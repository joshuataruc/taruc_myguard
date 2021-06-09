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
				<form action="../insert/add_facility.php" method="post">
					<div class="row">
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="fac_type">Facility Type</label>
							<input type="text" name="blk_st_no" id="blk_st_no" class="form-control" required>
							<br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Add Facility">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
 