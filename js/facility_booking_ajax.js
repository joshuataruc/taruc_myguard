$('#fac_reply_btn').click(function(e){
	e.preventDefault();
	var $fac_reply_id = $('#fac_reply_id').val();
	var $reply_complain_fac =$('#reply_complain_fac').val(); 
	var $complain_status_facility =$('#complain_status_facility').val();
	var reply_data = new XMLHttpRequest();
	reply_data.open('GET', '../ajax/facility_reply.php?reply_complain_fac='+$reply_complain_fac+'&complain_status_facility='+$complain_status_facility+'&fac_reply_id='+$fac_reply_id, true);
	reply_data.onload = function(){
		console.log(this.responseText);
		$('#reply_modal_facility').modal('toggle');
		location.reload(true);
		// $('#complain_tbl').DataTable().ajax.reload();
		console.log(this.responseText);
	}
	reply_data.send();
});

$("button[name='fac_reply_id']").click(function() {
	var id = this.id;
	$('#fac_reply_id').val(id);

	
});



