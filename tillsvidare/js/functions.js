$(document).ready(function() {

	document.body.style.backgroundImage ="url('img/bg.jpg')";

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