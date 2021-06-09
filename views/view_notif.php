<?php 

$select_notif = "SELECT * FROM notification_tbl";
$notif_query = mysqli_query($con, $select_notif);


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
			<a href="forms/add_notif.php" class=" btn add_btn btn-outline-dark float-right"><i class="fas fa-plus"></i></a>
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
		<table id="notif_table" class="table display table-hover" >
			<thead>
				<tr>	
					<th>Unit Id</th>
					<th>Notice Message</th>
					<th>Date</th>
					<th>Action</th>
				</tr>				 		 	
			</thead>	
			<tbody>
				<?php while ($notif_data = $notif_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $notif_data['unitAdd_id']; ?></td>
						<td><?php echo $notif_data['Notice_message']; ?></td>
						<td><?php echo $notif_data['date_time']; ?></td>
						<td>
							<button type="button" id="<?php echo $notif_data['id']; ?>" class="view_notif_img btn btn-success" data-toggle="modal" data-target="#notif_modal"><i class="fas fa-image"></i></button>

							<a href="update/update_notif_form.php?notif_id=<?php echo $notif_data['id']; ?>" class="btn btn-info"><i class="fas fa-user-edit"></i></a>

							<a href="delete/delete_notif.php?notif_id=<?php echo $notif_data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Notification?');"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>


	<!-- The Modal for complain photo -->
	<div class="modal fade" id="notif_modal">
		<div class="modal-dialog modal-xl" >
			<div class="modal-content">
				<button type="button" class="close d-flex justify-content-end" data-dismiss="modal">&times;</button>

				<div class="modal-body">
					<center><img id="notif_img_output" src="" class="img-fluid " ></center>
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
	<script src="js/notif_ajax.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		
		$('#notif_table').DataTable({

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