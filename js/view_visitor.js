$('.visitor_id').click(function(){
	var visitor_id = this.id;
	var visitor_data = new XMLHttpRequest();
	visitor_data.open('GET', 'ajax/view_visitor.php?visitor_id='+visitor_id, true);
	visitor_data.onload = function(){
		console.log(this.responseText);
		$('#view_more').empty();
		$('#view_more').append(this.responseText);
	}
	visitor_data.send();
	console.log(visitor_id);
});

// $("button[name='reply_id']").click(function() {
// 	var id = this.id;
// 	$('#reply_id_form').val(id);

	
// });