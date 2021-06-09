$(".update_fac_btn").click(function() {
	var fac_id = this.id;
	var select_fac_data = new XMLHttpRequest();
	select_fac_data.open('GET', 'ajax/select_facility.php?fac_id='+fac_id, true);
	select_fac_data.onload = function(){
		console.log(this.responseText);
		$('#fac_id').val(fac_id);
		$('#fac_type').val(this.responseText);
	}
	select_fac_data.send();

});
