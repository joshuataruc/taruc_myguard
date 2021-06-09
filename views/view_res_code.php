<?php 

$select_res_code = "SELECT * FROM res_code_tbl";
$res_code_query = mysqli_query($con, $select_res_code) or die($con->error);


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
    	.add_btn{
			border-radius: 50px;
		}
    </style>

</head>
<body>
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<a href="forms/add_resdence_code.php" class=" btn add_btn btn-outline-dark float-right"><i class="fas fa-plus"></i></a>
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
		<table id="res_code_tb" class="table display table-hover" >
			<thead>
				<tr>
					<th>Code</th>
					<th>Name</th>
					<th>Address</th>
					<th>Contact Person</th>
					<th>Contact #</th>
					<th>Email</th>
					<th>Post Code</th>
					<th>District</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($res_code_data = $res_code_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $res_code_data['residence_code']; ?></td>
						<td><?php echo $res_code_data['residence_name'] ; ?></td>
						<td><?php echo $res_code_data['residence_add1'] .' '. $res_code_data['residence_add2'] .' '. $res_code_data['residence_add3']; ?></td>
						<td><?php echo $res_code_data['contact_person']; ?></td>
						<td><?php echo $res_code_data['contact_no']; ?></td>
						<td><?php echo $res_code_data['email']; ?></td>
						<td><?php echo $res_code_data['post_code']; ?></td>
						<td><?php echo $res_code_data['district']; ?></td>
						<td>
							<a href="update/update_resident_code_form.php?res_id=<?php echo $res_code_data['residence_code']; ?>" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
							<a href="delete/delete_resident_code.php?res_id=<?php echo $res_code_data['residence_code']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>

				<?php endwhile; ?>
			</tbody>
		</table>
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
    
    

	<!-- <script src="js/bootstrap.min.js"></script> -->
	<script>
		$('#res_code_tb').DataTable({

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