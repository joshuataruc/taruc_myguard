<?php 

$select_request_tbl = "SELECT * FROM request_tbl";
$request_query = mysqli_query($con, $select_request_tbl);


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
	<div class="container-fluid">
		<!-- <div>
			<form method="post" action="import_function/add_reg_visitor.php" enctype="multipart/form-data">
				<div class="row">
					<input type="file" name="reg_visitor_csv" required>
					<input type="submit" name="" value="Add CSV">
				</div>
			</form>
		</div> -->
		<table id="request_tbl" class="table display table-hover" >
			<thead>
				<tr>
					<th>Resident Id</th>
					<th>Request Type</th>
					<th>Request Date</th>
					<th>Comment</th>
					<th>Status</th>
					<th>Admin Reply</th>
					<th>Action</th>	
				</tr>				 		 	
			</thead>	
			<tbody>
				<?php while ($request_data = $request_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $request_data['resident_id']; ?></td>
						<td><?php echo $request_data['request_type']; ?></td>
						<td><?php echo $request_data['request_date_time']; ?></td>
						<td><?php echo $request_data['comment']; ?></td>
						<td><?php echo $request_data['status']; ?></td>
						<td><?php echo $request_data['admin_reply']; ?></td>
						<td>
							<a href="update/update_request_form.php?req_id=<?php echo $request_data['request_id']; ?>" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
							<a href="delete/delete_request.php?req_id=<?php echo $request_data['request_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this complain?');"><i class="far fa-trash-alt"></i></a>
							<button name="reply_id" class="btn btn-primary" data-toggle="modal" data-target="#request_reply_modal" id="<?php echo $request_data['request_id']; ?>"><i class="fas fa-reply"></i></button>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
<div class="modal fade" id="request_reply_modal">
		<div class="modal-dialog modal-lg" >
			<div class="modal-content">
				<button type="button" class="close d-flex justify-content-end" data-dismiss="modal">&times;</button>

				<div class="modal-body">
					<form>
						<input type="hidden" name="" value="" class="form-control" id="reply_id_form">

						<div class="form-group">
							<label for="reply_request">Reply</label>
							<textarea id="reply_request" name="reply_request" class="form-control" rows="3"></textarea>
						</div>

						<div class="form-group">
							<label for="request_status">Status</label>
							<select class="custom-select" name="request_status" id="request_status" >
								<option hidden="" value="">Select Status</option>
								<option value="In Progress">In Progress</option>
								<option value="Resolved">Resolved</option>
							</select>
						</div>
						<div>
							<input type="submit" name="" class="btn btn-primary float-right" id="reply_btn" value="Reply">
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
	<script src="js/request_reply.js"></script>
	<script src="js/bootstrap.min.js"></script>
    
    

	<!-- <script src="js/bootstrap.min.js"></script> -->
	<script>
		$('#request_tbl').DataTable({

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