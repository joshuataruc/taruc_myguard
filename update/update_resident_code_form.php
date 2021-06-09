<?php include '../dbase.php'; 
$res_id = mysqli_real_escape_string($con, $_GET['res_id']);
$select_res_code = "SELECT * FROM res_code_tbl WHERE residence_code = '$res_id'";
$res_code_query = mysqli_query($con, $select_res_code) or die($con->error);
$res_code_data = $res_code_query->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form action="update_residence_code.php" method="post">
					<input type="hidden" name="rc_id" id="rc_id" class="form-control" value="<?php echo $res_code_data['residence_code'] ?>">
					<div class="row">
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="rc_name">Residence Name</label>
							<input type="text" name="rc_name" id="rc_name" class="form-control" value="<?php echo $res_code_data['residence_name'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="rc_connect">Residence Connect</label>
							<input type="text" disabled="yes" name="rc_connect" id="rc_connect" class="form-control" value="<?php echo $res_code_data['residence_connect'] ?>">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="rc_add1">Residence Address 1</label>
							<input type="text" name="rc_add1" id="rc_add1" class="form-control" value="<?php echo $res_code_data['residence_add1'] ?>">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="rc_add2">Residence Address 2</label>
							<input type="text" name="rc_add2" id="rc_add2" class="form-control" value="<?php echo $res_code_data['residence_add2'] ?>">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="rc_add3">Residence Address 3</label>
							<input type="text" name="rc_add3" id="rc_add3" class="form-control" value="<?php echo $res_code_data['residence_add3'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="rc_contact_person">Contact Person</label>
							<input type="text" name="rc_contact_person" id="rc_contact_person" class="form-control" value="<?php echo $res_code_data['contact_person'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="rc_contact_number">Contact Number</label>
							<input type="text" name="rc_contact_number" id="rc_contact_number" class="form-control" value="<?php echo $res_code_data['contact_no'] ?>"  required onkeypress='validate(event)' onpaste="return false;"><!-- onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" -->
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" value="<?php echo $res_code_data['email'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="post_code">Post Code</label>
							<input type="post_code" name="post_code" id="post_code" class="form-control" value="<?php echo $res_code_data['post_code'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="district">District</label>
							<input type="text" name="district" id="district" class="form-control" value="<?php echo $res_code_data['district'] ?>">
						</div>
						<div class="form-group col-md-6 col-lg-6 col-sm-12">
							<label for="state">State</label>
							<input type="text" name="state" id="state" class="form-control" value="<?php echo $res_code_data['state'] ?>"><br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Update Residence Code">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="js/number_only_input.js"></script>
</body>
</html>