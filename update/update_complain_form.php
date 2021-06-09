<?php 
include '../dbase.php';

$complain_id = mysqli_real_escape_string($con, $_GET['complain_id']);
$select_complain = "SELECT * FROM complain WHERE complain_id = '$complain_id'";
$complain_query = mysqli_query($con, $select_complain);
$complain_data = $complain_query->fetch_assoc();

 ?>


 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/add.css">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form action="update_complain.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<input type="hidden" name="complain_id" value="<?php echo $complain_data['complain_id']; ?>">
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="res_id">Resident id</label>
							<input type="text" class="form-control" id="res_id" name="res_id" value="<?php echo $complain_data['resident_id']; ?>">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="subject">Subject</label>
							<textarea class="form-control" id="subject" rows="3" name="subject" ><?php echo $complain_data['subject']; ?></textarea>
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="comment">Comment</label>
							<textarea class="form-control" id="comment" rows="3" name="comment"><?php echo $complain_data['comment']; ?></textarea>
						</div>
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="custom-file ">
								<input type="file" name="complain_photo" class="custom-file-input" id="complain_photo" accept="image/*">
								<label class="custom-file-label" for="complain_photo"><?php echo $complain_data['photo']; ?></label>
								<p class="status mt-3"></p>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-12">
								<img src="../complain_image/<?php echo $complain_data['photo']; ?>" width="100" height="100">
							</div>
							<div class="col-lg-6 col-sm-6 col-md-12">
								<input type="submit" name="" id="submit-btn" class=" mt-4 float-right btn btn-primary" value="Update Complain">
							</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script>
	
	 $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });


	$().ready(function() {
  $('[type="file"]').change(function() {
    var fileInput = $(this);
    if (fileInput.length && fileInput[0].files && fileInput[0].files.length) {
      var url = window.URL || window.webkitURL;
      var image = new Image();
      image.onload = function() {
        $('.status').empty();
        $('.status').append('Valid Image');
        $('.status').addClass('text-primary');
        $('#submit-btn').attr('disabled', false);
      };
      image.onerror = function() {
         $('.status').empty();
        $('.status').append('The File you uploaded is not a Image');
        $('.status').addClass('text-danger');
        $('#submit-btn').attr('disabled', true);
      };
      image.src = url.createObjectURL(fileInput[0].files[0]);
    }
  });
});
</script>
</body>
</html>