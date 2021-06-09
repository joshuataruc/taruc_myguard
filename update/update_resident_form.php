<?php include '../dbase.php'; 

$select_house = "SELECT * FROM house_tbl";
$house_query = mysqli_query($con, $select_house);

$resident_id = mysqli_real_escape_string($con, $_GET['resident_id']);

$select_resident = "SELECT * FROM resident_tbl WHERE resident_id = '$resident_id'";
$resident_query = mysqli_query($con, $select_resident);
$resident_data = $resident_query->fetch_assoc();

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
				<form action="update_resident.php" method="post">
					<div class="row">
						<input type="hidden" name="resident_id" id="resident_id" class="form-control" value="<?php echo $resident_data['resident_id'] ?>">
						<div class="form-group col-md-2 col-lg-2 col-sm-12">
							<label for="fname">House ID</label> 
							<select class="browser-default custom-select" name="house_id" required="">
							  <option value="<?php echo $resident_data['house_id'] ?>" hidden selected><?php echo $resident_data['house_id'] ?></option>
							  <?php while ($house_data = $house_query->fetch_assoc()):?>
							  	<option value="<?php echo $house_data['house_id']; ?>"><?php echo $house_data['house_id']; ?></option>
							  <?php endwhile; ?>
							</select>
						</div>
						<div class="form-group col-md-5 col-lg-5 col-sm-12">
							<label for="fname">First name</label>
							<input type="text" name="fname" id="fname" class="form-control" value="<?php echo $resident_data['fname'] ?>">
						</div>
						<div class="form-group col-md-5 col-lg-5 col-sm-12">
							<label for="lname">Last name</label>
							<input type="text" name="lname" id="lname" class="form-control" value="<?php echo $resident_data['lname'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="cont_num">Contact Number</label>
							<input type="text" name="cont_num" id="cont_num" class="form-control" required onkeypress='validate(event)' onpaste="return false;" value="<?php echo $resident_data['contact_num'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="res_type">Resident Type</label>
							<select class="browser-default custom-select" name="res_type">
							  <option value="<?php echo $resident_data['resident_type'] ?>" hidden selected><?php echo $resident_data['resident_type'] ?></option>
							  <option value="Owner">Owner</option>
							  <option value="Tenant">Tenant</option>
							  <option value="Parent">Parent</option>
							  <option value="Sibling">Sibling</option>
							  <option value="Daughter">Daughter</option>
							  <option value="Son">Son</option>
							  <option value="Spouse">Spouse</option> 
							</select>
							<br><br>
							<input type="submit" name="" class="float-right btn btn-primary" id="submit-btn" value="Update Resident">
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/number_only_input.js"></script>
</body>
</html>