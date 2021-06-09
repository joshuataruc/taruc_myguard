<?php include 'dbase.php'; 

$select_house = "SELECT * FROM house_tbl";
$house_query = mysqli_query($con, $select_house);

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
				<form action="../insert/add_committee.php" method="post">
					<div class="row">
						<div class="form-group col-md-2 col-lg-2 col-sm-12">
							<label for="fname">House ID</label> 
							<select class="browser-default custom-select" name="house_id" required="">
							  <option></option>
							  <?php while ($house_data = $house_query->fetch_assoc()):?>
							  	<option value="<?php echo $house_data['house_id']; ?>"><?php echo $house_data['house_id']; ?></option>
							  <?php endwhile; ?>
							</select>
						</div>
						<div class="form-group col-md-5 col-lg-5 col-sm-12">
							<label for="fname">First name</label>
							<input type="text" name="fname" id="fname" class="form-control" required>
						</div>
						<div class="form-group col-md-5 col-lg-5 col-sm-12">
							<label for="lname">Last name</label>
							<input type="text" name="lname" id="lname" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="cont_num">Contact Number</label>
							<input type="text" name="cont_num" id="cont_num" class="form-control" required onkeypress='validate(event)' onpaste="return false;">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="position">Position</label>
							<input type="text" name="position" id="position" class="form-control" required>
							<br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Add Committee">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/number_only_input.js"></script>
</body>
</html>