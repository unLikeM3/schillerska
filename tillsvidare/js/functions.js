$(document).ready(function() {

	var toggle = false;
	$('#kontaktbtn').click(function() {
		if(toggle == false){
			$('#kontaktinfo').slideDown(1500);
			toggle = true;
		}else{
			$('#kontaktinfo').slideUp(500);
			toggle = false;
		}
		
	});
});