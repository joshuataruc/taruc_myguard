$('.view_notif_img').click(function() {
	
	var $notif_id = $(this).attr("id");
	// alert($notif_id);

	var select_img = new XMLHttpRequest();
	select_img.open('GET','ajax/select_notif_img.php?select_img='+$notif_id, true);
	select_img.onload = function(){
		// alert(this.responseText);
		console.log(this.responseText);
		$('#notif_img_output').attr('src', 'notif_img/'+this.responseText);
	}
	select_img.send();

});