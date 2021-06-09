<?php include 'session_check_views.php'; ?>
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
				<form action="../insert/add_complain.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="res_id">Resident id</label>
							<input type="text" class="form-control" id="res_id" name="res_id" required="">
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="subject">Subject</label>
							<textarea class="form-control" id="subject" rows="3" name="subject" required=""></textarea>
						</div>
						<div class="form-group col-md-12 col-lg-12 col-sm-12">
							<label for="comment">Comment</label>
							<textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
						</div>
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="custom-file ">
								<input type="file" name="complain_photo" class="custom-file-input" id="complain_photo" accept="image/*">
								<label class="custom-file-label" for="complain_photo">Upload Photo</label>
								<p class="status mt-3"></p>
							</div>
							<div class="col-lg-12 col-sm-12 col-md-12">
								<input type="submit" name="" id="submit-btn" class=" mt-4 float-right btn btn-primary" value="Add Complain">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="js/jquery-3.4.1.min.js"></script>
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