$('.view_complain_img').click(function() {
	
	var $complain_id = $(this).attr("id");
	// alert($complain_id);

	var select_img = new XMLHttpRequest();
	select_img.open('GET','ajax/select_complain_img.php?select_img='+$complain_id, true);
	select_img.onload = function(){
		// alert(this.responseText);
		console.log(this.responseText);
		$('#complain_img_output').attr('src', 'complain_image/'+this.responseText);
	}
	select_img.send();

});

$('#reply_btn').click(function(e){
	e.preventDefault();
	var $complain_id = $('#reply_id_form').val();
	var $reply_complain =$('#reply_complain').val(); 
	var $complain_status =$('#complain_status').val();
	var reply_data = new XMLHttpRequest();
	reply_data.open('GET', 'ajax/complain_reply.php?reply_complain='+$reply_complain+'&complain_status='+$complain_status+'&complain_id='+$complain_id, true);
	reply_data.onload = function(){
		console.log(this.responseText);
		$('#reply_modal').modal('toggle');
		location.reload(true);
		// $('#complain_tbl').DataTable().ajax.reload();
	}
	reply_data.send();
});

$("button[name='reply_id']").click(function() {
	var id = this.id;
	$('#reply_id_form').val(id);

	
});
// $('#reply_id_form').val(id);
// $("button[name='mybutton']"