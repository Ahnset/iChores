$(document).ready(function(){

	$(".feat1").waypoint(function(direction){
		if (direction == 'down'){
			$('.sticky').addClass('sticky-shown');

			// $('a#start-lnk').addClass('hyper-active');
			// $('a#download-lnk').removeClass('hyper-active');
			// $('a#services-lnk').removeClass('hyper-active');
			// $('a#contact-lnk').removeClass('hyper-active');
		}
	 
		if(direction == 'up'){
			$('.sticky').removeClass('sticky-shown');
		}
	});

	$("a.btn-landing").click(function(){
		$('html, body').animate({scrollTop: $('.feat1').offset().top}, 500);
	});

	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});

});