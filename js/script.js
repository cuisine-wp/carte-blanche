jQuery(document).ready(function($){

	$('.billboard--contents').sticky({
		topSpacing:30
	});

	var _h = $(window).height() * 0.48;
	$('.billboard--image img').css({
		height: _h+'px'
	})

});