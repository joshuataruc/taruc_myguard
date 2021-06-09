<?php 

$select_facility = "SELECT * FROM facility_tbl";
$facility_query = mysqli_query($con, $select_facility);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="datatables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/table_custom.css">
    <style>
		.close{
			margin-top: 10px;
			margin-right: 15px;
		}
		.add_btn{
			border-radius: 50px;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<a href="forms/add_facility.php" class=" btn add_btn btn-outline-dark float-right"><i class="fas fa-plus"></i></a>
		</div>
	</div>
	<div class="container-fluid">
		<!-- <div>
			<form method="post" action="import_function/add_reg_visitor.php" enctype="multipart/form-data">
				<div class="row">
					<input type="file" name="reg_visitor_csv" required>
					<input type="submit" name="" value="Add CSV">
				</div>
			</form>
		</div> -->
		<table id="facility_tbl" class="table display table-hover align-center" >
			<thead>
				<tr>
					
					
					<th>Facility Type</th>
					
					<th>Action</th>
				</tr>				 		 	
			</thead>	
			<tbody>
				<?php while ($facility_data = $facility_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $facility_data['facility_type']; ?></td>
						
						<td>
							<a data-toggle="modal" data-target="#update_facility_modal" id="<?php echo $facility_data['facility_id']; ?>" class="update_fac_btn btn btn-info"><i class="fas text-white fa-user-edit"></i></a>
							<a href="delete/delete_facility.php?facility_id=<?php echo $facility_data['facility_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this complain?');"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>

	<div class="modal fade" id="update_facility_modal">
		<div class="modal-dialog" >
			<div class="modal-content">
				<button type="button" class="close d-flex justify-content-end" data-dismiss="modal">&times;</button>

				<div class="modal-body">
					<form action="../update/update_facility.php" method="post">
						<input type="hidden" name="fac_id" value="" class="form-control" id="fac_id">

						<div class="form-group">
							<label for="fac_type">Facility Type</label>
							<input type="text" name="facility_type" value="" class="form-control" id="fac_type">
						</div>
						<div>
							<input type="submit" name="" class="btn btn-primary float-right" id="reply_btn" value="Update">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<script src="https://kit.fontawesome.com/428feb9164.js"></script>
	<script src="datatables/jquery-3.3.1.min.js"></script>
	<script src="datatables/jquery.dataTables.min.js"></script>
	<script src="datatables/dataTables.bootstrap4.min.js"></script>
	<script src="datatables/dataTables.buttons.min.js"></script>
	<script src="datatables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
	<script src="datatables/jszip.min.js"></script>
	<script src="datatables/pdfmake.min.js"></script>
	<script src="datatables/vfs_fonts.js"></script>
	<script src="datatables/buttons.html5.min.js"></script>
	<script src="datatables/buttons.print.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/update_facility.js"></script>
    
	<script>
		$('#facility_tbl').DataTable({

			dom: 'lBfrtip',
			"lengthMenu": [
			[10, 25, 50, -1],
			[10, 25, 50, "All"]
			],
			buttons: [
			'excelHtml5',
			'csvHtml5',
			'pdfHtml5',
			'print'

			],
			language: {
			    paginate: {
			      next: '<i class="fas fa-chevron-right"></i></i>',
			      previous: '<i class="fas fa-chevron-left"></i></i>'  
			    }
			  }

		});
	</script>
</body>
</html>