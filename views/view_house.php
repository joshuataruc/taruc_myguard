<?php 

$select_house = "SELECT * FROM house_tbl";
$house_query = mysqli_query($con, $select_house);


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
			<a href="forms/add_house.php" class=" btn add_btn btn-outline-dark float-right"><i class="fas fa-plus"></i></a>
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
		<table id="house_tbl" class="table display table-hover" >
			<thead>
				<tr>
					<th>House Id</th>
					<th>Unit #</th>
					<th>Block Street #</th>
					<th>Action</th>
				</tr>				 	
			</thead>	
			<tbody>
				<?php while ($house_data = $house_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $house_data['house_id'] ; ?></td>
						<td><?php echo $house_data['unit_no']; ?></td>
						<td><?php echo $house_data['block_street_no']; ?></td>
						<td>
							<a href="update/update_house_form.php?house_id=<?php echo $house_data['house_id']; ?>"  id="<?php echo $house_data['house_id']; ?>" class="btn btn-info house_btn"><i class="fas fa-user-edit text-white"></i></a>
							<a href="delete/delete_house.php?house_id=<?php echo $house_data['house_id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
		<!-- <div class="modal fade" id="update_house_modal">
		<div class="modal-dialog" >
			<div class="modal-content">
				<button type="button" class="close d-flex justify-content-end" data-dismiss="modal">&times;</button>

				<div class="modal-body">
					<form action="insert/add_house.php" method="post">
					<div class="row">
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="unit_no">Unit No.</label>
							<input type="text" name="unit_no" id="unit_no" class="form-control">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="blk_st_no">Block Street No.</label>
							<input type="text" name="blk_st_no" id="blk_st_no" class="form-control">
							<br>
							<input type="submit" name="" class="float-right btn btn-primary" value="Update House">
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div> -->


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
	<!-- <script src="../js/update_house.js"></script> -->
	<script>
		$('#house_tbl').DataTable({

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