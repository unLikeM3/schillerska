$(document).ready(function() {
	$('#wrapper').fadeIn(1200);

	var toggle = false;
	$('#kontaktbtn').click(function() {
		if(toggle == false){
			$('#kontaktinfo').slideDown(1000);
			toggle = true;
		}else{
			$('#kontaktinfo').slideUp(500);
			toggle = false;
		}
		
	});
});