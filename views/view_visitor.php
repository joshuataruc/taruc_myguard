<?php 

$select_visitor = "SELECT * FROM visitor_mode_tbl";
$visitor_query = mysqli_query($con, $select_visitor);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css"> -->
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
		<table id="visitor" class="table display table-hover table-responsive table-sm" >
			<thead class=""><!-- bg-primary text-white -->
				<tr>
					
					
					<th>House Id</th>
					<th>Resident</th>
					<th>Name</th>
					<th>Contact Number</th>
					<th>Visitor Mode</th>
					<th>Plate Number</th>
					<th>Expected Date</th>
					<th>Expected Time</th>
					<th>Arrival</th>
					<th>Visitor Type</th>
					<th>Visitor_exit</th>
					<th>Visitor Status</th>
					<!-- <th>Action</th> -->
				</tr>				 		 	
			</thead>	
			<tbody>
				<?php while ($visitor_data = $visitor_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $visitor_data['house_id']; ?></td>
						<td><?php echo $visitor_data['resident_id'] ; ?></td>
						<td><?php echo $visitor_data['visitor_name']; ?></td>
						<td><?php echo $visitor_data['visitor_contact_num']; ?></td>
						<td><?php echo $visitor_data['visitor_mode']; ?></td>
						<td><?php echo $visitor_data['visitor_plate_num'] ; ?></td>
						<td><?php echo $visitor_data['visitor_expected_date']; ?></td>
						<td><?php echo $visitor_data['visitor_expected_time']; ?></td>
						<td><?php echo $visitor_data['visitor_arrival']; ?></td>
						<td><?php echo $visitor_data['visitor_type'] ; ?></td>
						<td><?php echo $visitor_data['visitor_exit']; ?></td>
						<td><?php echo $visitor_data['visitor_status']; ?></td>
						
						<!-- <td>
							<a href="update/update_visitor_form.php?visitor_id=<?php# echo $visitor_data['visitor_id']; ?>" class="btn btn-info btn-small"><i class="fas fa-user-edit"></i></a>
							<a href="delete/delete_visitor.php?visitor_id=<?php #echo $visitor_data['visitor_id']; ?>" class="btn btn-danger btn-small" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt"></i></a>
							 <button name="visitor_id" class="btn btn-success visitor_id" data-toggle="modal" data-target="#reply_modal" id="<?php #echo $visitor_data['visitor_id']; ?>"><i class="far fa-eye"></i></button>
						</td> -->
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>


	<!-- <div class="modal fade" id="reply_modal">
		<div class="modal-dialog modal-lg" >
			<div class="modal-content">
				<button type="button" class="close d-flex justify-content-end" data-dismiss="modal">&times;</button>

				<div class="modal-body">
							<ul id="view_more" class="list-group"> -->
								<!-- show data from ajax here -->
							<!-- </ul>
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
	<!-- <script src="../js/view_visitor.js"></script> -->
	<script src="js/bootstrap.min.js"></script>



	<!-- <script src="js/bootstrap.min.js"></script> -->
	<script>
		$('#visitor').DataTable({

			dom: 'lBfrtip',
			"lengthMenu": [
			[10, 25, 50, -1],
			[10, 25, 50, "All"]
			],
			buttons: [
			'excelHtml5',
			'csvHtml5',
			
			{
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL',
            },
            'print',

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