$('#reply_btn').click(function(e){
	e.preventDefault();
	var request_id = $('#reply_id_form').val();
	var reply_request =$('#reply_request').val(); 
	var request_status =$('#request_status').val();
	var reply_data = new XMLHttpRequest();
	reply_data.open('GET', 'ajax/request_reply.php?reply_request='+reply_request+'&request_status='+request_status+'&request_id='+request_id, true);
	reply_data.onload = function(){
		console.log(this.responseText);
		$('#request_reply_modal').modal('toggle');
		location.reload(true);
		$('#complain_tbl').DataTable().ajax.reload();
	}
	reply_data.send();

});

$("button[name='reply_id']").click(function() {
	var id = this.id;
	$('#reply_id_form').val(id);


});