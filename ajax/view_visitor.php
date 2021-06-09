<?php 
include '../dbase.php';
$vis_id = mysqli_real_escape_string($con, $_GET['visitor_id']);
$select_visitor = "SELECT * FROM visitor_mode_tbl WHERE visitor_id = '$vis_id' ";
$visitor_query = mysqli_query($con, $select_visitor) or die($con->error);
$visitor_data_ajax = $visitor_query->fetch_assoc();

echo $view = '<li class="list-group-item">'.'<b>Expected Date:</b> '.$visitor_data_ajax['visitor_expected_date'].'</li>'.
	'<li class="list-group-item">'.'<b>Expected Time:</b> '.$visitor_data_ajax['visitor_expected_time'].'</li>'.
	'<li class="list-group-item">'.'<b>Expected Arrival</b>: '.$visitor_data_ajax['visitor_arrival'].'</li>'.
	'<li class="list-group-item">'.'<b>Visitor Type:</b> '.$visitor_data_ajax['visitor_type'].'</li>'.
	'<li class="list-group-item">'.'<b>Visitor Exit:</b> '.$visitor_data_ajax['visitor_exit'].'</li>'.
	'<li class="list-group-item">'.'<b>Visitor Status:</b> '.$visitor_data_ajax['visitor_status'].'</li>';


?>

<!-- <td><?php #echo $visitor_data['visitor_expected_date']; ?></td>
						<td><?php #echo $visitor_data['visitor_expected_time']; ?></td>
						<td><?php #echo $visitor_data['visitor_arrival']; ?></td>
						<td><?php #echo $visitor_data['visitor_type'] ; ?></td>
						<td><?php #echo $visitor_data['visitor_exit']; ?></td>
						<td><?php #echo $visitor_data['visitor_status']; ?></td> -->