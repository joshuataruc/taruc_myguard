<?php 
include 'dbase.php';

$select_facilty = "SELECT * FROM facility_tbl";
$facility_query = mysqli_query($con, $select_facilty);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/add.css">

	</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form action="../insert/add_facility_booking.php" method="post">
					<div class="row">
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="facility_id">Facility Type</label>
							<select class="browser-default custom-select" name="facility_id" required="" id="facility_id">
							  <option></option>
							  <?php while ($facility_data = $facility_query->fetch_assoc()): ?>
							  	<option value="<?php echo $facility_data['facility_type'];	 ?>"><?php echo $facility_data['facility_type'];?></option>
							  <?php endwhile; ?>
							</select>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="res_id">Resident Id</label>
							<input type="text" name="res_id" id="res_id" class="form-control" required="">
						</div>
						<div class="form-group col-md-4 col-lg-4 col-sm-12">
							<label for="req_date">Date Request</label>
							<input type="date" name="req_date" id="req_date" class="form-control" required="">
						</div>
						<div class="form-group col-md-2 col-lg-2 col-sm-12">
							<label for="hr">Hour</label>
							<select class="browser-default custom-select" name="hr" id="hr" required>
							  <option></option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							  <option value="9">9</option>
							  <option value="10">10</option>
							  <option value="11">11</option>
							  <option value="12">12</option>
							</select>
						</div>
						<div class="form-group col-md-2 col-lg-2 col-sm-12">
							<label for="min">Min</label>
							<select class="browser-default custom-select" name="min" id="min" required>
							  <option></option>
							  <option value="5">5</option>
							  <option value="10">10</option>
							  <option value="15">15</option>
							  <option value="20">20</option>
							  <option value="25">25</option>
							  <option value="30">30</option>
							  <option value="35">35</option>
							  <option value="40">40</option>
							  <option value="45">45</option>
							  <option value="50">50</option>
							  <option value="55">55</option>
							  <option value="60">60</option>
							</select>
						</div>
						<div class="form-group col-md-2 col-lg-2 col-sm-12">
							<label for="period">Time Period</label>
							<select class="browser-default custom-select" name="time_period" id="time_period" required>
							  <option value="AM">AM</option>
							  <option value="PM">PM</option>
							</select>
						</div>
						<div class="form-group col-md-2 col-lg-2 col-sm-12"><p></p>
							<div class="form-group col-md-2 col-lg-2 col-sm-12">
							<input type="submit" name="" class="mt-4 btn btn-primary " id="submit-btn" value="Add Facility Booking">
						</div>
						</div>
						<div class="form-group col-md-10 col-lg-10 col-sm-12">
							<label class="status"></label>
							<!-- <input type="" name="status" class="form-control status"> -->
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("req_date")[0].setAttribute('min', today);
	</script>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/check_availability.js"></script>
</body>
</html>