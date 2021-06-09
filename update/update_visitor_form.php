<?php 

include '../dbase.php';

$visitor_id = mysqli_real_escape_string($con, $_GET['visitor_id']);
$select_visitor = "SELECT * FROM visitor_mode_tbl WHERE visitor_id = '$visitor_id' ";
$visitor_query = mysqli_query($con, $select_visitor) or die($con->error);
$visitor_data = $visitor_query->fetch_assoc();


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
				<form action="update_visitor.php" method="post">
					<div class="row">
						<input type="hidden" name="visitor_id" id="visitor_id" class="form-control" value="<?php echo $visitor_data['visitor_id']; ?>">
						<div class="form-group col-md-3 col-lg-3 col-sm-12">
							<label for="resident_id">Resident Id</label>
							<input type="text" name="resident_id" id="resident_id" class="form-control" value="<?php echo $visitor_data['resident_id']; ?>">
						</div>
						<div class="form-group col-md-3 col-lg-3 col-sm-12">
							<label for="house_id">House ID</label> 
							<select class="browser-default custom-select" name="house_id" required="">
								<option value="<?php echo $visitor_data['house_id']; ?>" selected hidden><?php echo $visitor_data['house_id']; ?></option>
								<?php while ($house_data = $house_query->fetch_assoc()):?>
									<option value="<?php echo $house_data['house_id']; ?>"><?php echo $house_data['house_id']; ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<div class="form-group col-md-3 col-lg-3 col-sm-12 ">
							<label for="vis_mode">Visitor Mode</label> 
							<select class="browser-default custom-select" name="vis_mode" >
								<option value="<?php echo $visitor_data['visitor_mode']; ?>" selected hidden><?php echo $visitor_data['visitor_mode']; ?></option>
								<option value="Walkin">Walkin</option>
								<option value="Registered">Registered</option>
							</select>
						</div>
						<div class="form-group col-md-3 col-lg-3 col-sm-12 ">
							<label for="vis_type">Visitor Type</label> 
							<select class="browser-default custom-select" name="vis_type" required="">
								<option value="<?php echo $visitor_data['visitor_type']; ?>" selected hidden><?php echo $visitor_data['visitor_type']; ?></option>
								<option value="Friend">Friend</option>
								<option value="Relative">Relative</option>
							</select>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="vis_name">Visitor Name</label>
							<input type="text" name="vis_name" id="vis_name" class="form-control" value="<?php echo $visitor_data['visitor_name']; ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="vis_plate_num">Visitor Plate #</label>
							<input type="text" name="vis_plate_num" id="vis_plate_num" class="form-control" value="<?php echo $visitor_data['visitor_plate_num']; ?>">
						</div>
						<div class="form-group col-md-4 col-lg-4 col-sm-12">
							<label for="vis_cont_num">Visitor Contact #</label>
							<input type="text" name="vis_cont_num" id="vis_cont_num" class="form-control" required onkeypress='validate(event)' onpaste="return false;" value="<?php echo $visitor_data['visitor_contact_num']; ?>">
						</div>
						<div class="form-group col-md-4 col-lg-4 col-sm-12">
							<label for="vis_date">Visitor Expected Date</label>
							<input type="date" name="vis_date" id="vis_date" class="form-control" required onkeypress='validate(event)' onpaste="return false;" value="<?php echo $visitor_data['visitor_expected_date']; ?>">
						</div>
						<div class="form-group col-md-4 col-lg-4 col-sm-12">
							<label for="vis_expected_time">Visitor ETA</label>
							<input type="time" name="vis_expected_time" id="vis_expected_time" class="form-control" value="<?php echo $visitor_data['visitor_expected_time']; ?>">
							<small class="text-muted">hr:min:(AM/PM)</small>
							<br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Update Visitor">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../js/number_only_input.js"></script>
	<script>
		var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("vis_date")[0].setAttribute('min', today);
	</script>
</body>

</html>