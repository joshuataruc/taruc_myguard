<?php 
include '../dbase.php';
$house_id = mysqli_real_escape_string($con, $_GET['house_id']);
$select_house = "SELECT * FROM house_tbl WHERE house_id = '$house_id'";
$house_query = mysqli_query($con, $select_house) or die($con->error);
$house_data = $house_query->fetch_assoc();


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
				<form action="update_house.php" method="post">
					<div class="row">
						<input type="hidden" name="house_id" value="<?php echo $house_data['house_id'] ?>">
						
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="unit_no">Unit No.</label>
							<input type="text" name="unit_no" id="unit_no" class="form-control" value="<?php echo $house_data['unit_no'] ?>">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="blk_st_no">Block Street No.</label>
							<input type="text" name="blk_st_no" id="blk_st_no" class="form-control" value="<?php echo $house_data['block_street_no'] ?>">
							<br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Update House">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
 