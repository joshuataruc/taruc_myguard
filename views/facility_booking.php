<?php 

$select_book_tbl = "SELECT * FROM facility_booking_tbl";
$book_query = mysqli_query($con, $select_book_tbl);


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
		<table id="fac_booking_tbl" class="table display table-hover" >
			<thead>
				<tr>
					<th>Resident Id</th>
					<th>Facility Type</th>
					<th>Request Date</th>
					<th>Transaction Date</th>
					<th>Facility Status</th>
					<th>Admin Reply</th>
					<th>Action</th>
				</tr>				 		 	
			</thead>	
			<tbody>
				<?php while ($book_data = $book_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $book_data['resident_id']; ?></td>
						<td><?php echo $book_data['facility_type']; ?></td>
						<td><?php echo $book_data['req_date'].' '.$book_data['hr'].':'.$book_data['min'].':'. $book_data['time_period']; ?></td>
						<td><?php echo $book_data['transac_date_time']; ?></td>
						<td><?php echo $book_data['facility_stat']; ?></td>
						<td><?php echo $book_data['admin_reply']; ?></td>
						<td>
							<a href="update/update_facility_booking_form.php?book_id=<?php echo $book_data['facility_book_id']; ?>" class="btn btn-info"><i class="fas fa-user-edit"></i></a>
							<a href="delete/delete_facility_booking.php?book_id=<?php echo $book_data['facility_book_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this complain?');"><i class="far fa-trash-alt"></i></a>
							<button name="fac_reply_id" class="btn btn-primary" data-toggle="modal" data-target="#reply_modal_facility" id="<?php echo $book_data['facility_book_id']; ?>"><i class="fas fa-reply"></i></button>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>


	<div class="modal fade" id="reply_modal_facility">
		<div class="modal-dialog modal-lg" >
			<div class="modal-content">
				<button type="button" class="close d-flex justify-content-end" data-dismiss="modal">&times;</button>

				<div class="modal-body">
					<form>
						<input type="hidden" name="" value="" class="form-control" id="fac_reply_id">

						<div class="form-group">
							<label for="reply_complain_fac">Reply</label>
							<textarea id="reply_complain_fac" name="reply_complain_fac" class="form-control" rows="3"></textarea>
						</div>

						<div class="form-group">
							<label for="status">Status</label>
							<select class="custom-select" name="complain_status_facility" id="complain_status_facility" >
								<option hidden="" value="">Select Status</option>
								<option value="In Progress">In Progress</option>
								<option value="Resolved">Resolved</option>
							</select>
						</div>
						<div>
							<input type="submit" name="" class="btn btn-primary float-right" id="fac_reply_btn" value="Reply">
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
	<script src="js/facility_booking_ajax.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$('#fac_booking_tbl').DataTable({

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