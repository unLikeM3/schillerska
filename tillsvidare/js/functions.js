$(document).ready(function() {
	showPage('homez');



	$('.aboutpage').click(function() {
		showPage('about');
		$('.active').removeClass('active');
		$('.aboutpage').addClass('active');
	});
	$('.homepage').click(function() {
		showPage('homez');
		$('.active').removeClass('active');
		$('.homepage').addClass('active');
	});
	$('.contactpage').click(function() {
		showPage('contact');
		$('.active').removeClass('active');
		$('.contactpage').addClass('active');
	});
});

function showPage (page) {
	$('#mc').fadeOut(250, function() {
		$.get(page+'.php', function(data) {
			$('#mc').html(data);
			$('#mc').fadeIn(250);
		});
	});
}