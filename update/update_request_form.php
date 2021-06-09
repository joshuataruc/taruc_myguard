<?php 
include '../dbase.php';
$req_id = mysqli_real_escape_string($con, $_GET['req_id']);
$select_request_tbl = "SELECT * FROM request_tbl WHERE request_id = '$req_id' ";
$request_query = mysqli_query($con, $select_request_tbl);
$request_data = $request_query->fetch_assoc();

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
				<form action="update_request.php" method="post">
					<input type="hidden" name="req_id" value="<?php echo $request_data['request_id']; ?>" class="form-control" >
					<div class="row">

						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="req_type">Request</label>
							<select class="browser-default custom-select" name="req_type" >
							  <option hidden selected value="<?php echo $request_data['request_type']; ?>"><?php echo $request_data['request_type']; ?></option>
							  <option value="Access Card">Access Card</option>
							  <option value="Parking Space">Parking Space</option>
							  <option value="Renovation">Renovation</option>
							</select>
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="res_id">Resident ID</label>
							<input type="text" name="res_id" class="form-control" id="res_id" value="<?php echo $request_data['resident_id']; ?>">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="comment">Comment</label>
    						<textarea class="form-control" id="comment" rows="3" name="comment"><?php echo $request_data['comment']; ?></textarea>
							<br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Update Request">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>