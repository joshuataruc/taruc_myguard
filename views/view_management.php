<?php

$select_mgnt = "SELECT * FROM management_table";
$mgnt_query = mysqli_query($con, $select_mgnt);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" href="css/management.css">-->
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
			<a href="forms/add_management.php" class=" btn add_btn btn-outline-dark float-right"><i class="fas fa-plus"></i></a>
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
		<table id="mgnt_tbl" class="table display table-hover" >
			<thead>
				<tr>
					<th>Username</th>
					<th>Residence Code</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($mgnt_data = $mgnt_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $mgnt_data['username']; ?></td>
						<td><?php echo $mgnt_data['residence_code'] ; ?></td>
						<td><?php echo $mgnt_data['fname'] .' '. $mgnt_data['lname']; ?></td>
						<td><?php echo $mgnt_data['email']; ?></td>
						<td>
							<a href="update/update_management_form.php?mgnt_id=<?php echo $mgnt_data['id']; ?>" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
							<a href="delete/delete_management.php?mgnt_id=<?php echo $mgnt_data['id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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
		$('#mgnt_tbl').DataTable({

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
