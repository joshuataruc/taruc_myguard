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
				<form action="../insert/add_visitor.php" method="post">
					<div class="row">
						<div class="form-group col-md-3 col-lg-3 col-sm-12">
							<label for="resident_id">Resident Id</label>
							<input type="text" name="resident_id" id="resident_id" class="form-control" required>
						</div>
						<div class="form-group col-md-3 col-lg-3 col-sm-12">
							<label for="house_id">House ID</label> 
							<select class="browser-default custom-select" name="house_id" required="">
								<option></option>
								<?php while ($house_data = $house_query->fetch_assoc()):?>
									<option value="<?php echo $house_data['house_id']; ?>"><?php echo $house_data['house_id']; ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<div class="form-group col-md-3 col-lg-3 col-sm-12 ">
							<label for="vis_mode">Visitor Mode</label> 
							<select class="browser-default custom-select" name="vis_mode" required="">
								<option></option>
								<option value="Walkin">Walkin</option>
								<option value="Registered">Registered</option>
							</select>
						</div>
						<div class="form-group col-md-3 col-lg-3 col-sm-12 ">
							<label for="vis_type">Visitor Type</label> 
							<select class="browser-default custom-select" name="vis_type" required="">
								<option></option>
								<option value="Friend">Friend</option>
								<option value="Relative">Relative</option>
							</select>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="vis_name">Visitor Name</label>
							<input type="text" name="vis_name" id="vis_name" class="form-control" required>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="vis_plate_num">Visitor Plate #</label>
							<input type="text" name="vis_plate_num" id="vis_plate_num" class="form-control">
						</div>
						<div class="form-group col-md-4 col-lg-4 col-sm-12">
							<label for="vis_cont_num">Visitor Contact #</label>
							<input type="text" name="vis_cont_num" id="vis_cont_num" class="form-control" required onkeypress='validate(event)' onpaste="return false;">
						</div>
						<div class="form-group col-md-4 col-lg-4 col-sm-12">
							<label for="vis_date">Visitor Expected Date</label>
							<input type="date" name="vis_date" id="vis_date" class="form-control" required onkeypress='validate(event)' onpaste="return false;">
						</div>
						<div class="form-group col-md-4 col-lg-4 col-sm-12">
							<label for="vis_expected_time">Visitor ETA</label>
							<input type="time" name="vis_expected_time" id="vis_expected_time" class="form-control" required="">
							<small class="text-muted">hr:min:(AM/PM)</small>
							<br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Visitor">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/number_only_input.js"></script>
	<script>
		var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("vis_date")[0].setAttribute('min', today);
	</script>
</body>

</html>
