$('.house_btn').click(function() {
	var house_btn = this.id;
	var update_house = new XMLHttpRequest();
	update_house.open('GET', 'ajax/select_house.php?house_id='+house_btn, true);
	update_house.onload = function(){
		console.log(this.responseText);
	}
	update_house.send();

});

