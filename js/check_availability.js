$('#submit-btn').attr('disabled', true);
$('#req_date').change(function() {
var fac_type = $('#facility_id').val();
var req_date  = $('#req_date').val();
console.log(fac_type);

var	search_date = new XMLHttpRequest();
 search_date.open('GET','ajax/select_date.php?req_date='+req_date+'&fac_type='+facility_id, true);
search_date.onload = function(){
	console.log(this.responseText);
	$(".status").empty();
	$(".status").append(this.responseText);
}

search_date.send();

});
// $('#sel1 option:selected').text();