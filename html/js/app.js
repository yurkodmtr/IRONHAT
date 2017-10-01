"use strict";

var siteScript = function(){

	$('.mobile_nav__open').click(function(){
		$('.mobile_nav').fadeIn();
		$('body').css('overflow','hidden');
	});

	$('.mobile_nav .close').click(function(){
		$('.mobile_nav').fadeOut();
		$('body').css('overflow','visible');
	});

	var homeMenuItemHeight = function(){		
		$('.home .menu .item').css('height','auto');
		if ( $(window).width() < 768 ) {
			return false;
		}		
		
		var maxHeight = 0;
		$('.home .menu .item').each(function(){
			var h = $(this).outerHeight();
			if ( h > maxHeight ) {
				maxHeight = h;
			}
		});
		$('.home .menu .item').css('height', maxHeight + 'px');
	}

	$(window).load(function(){
		homeMenuItemHeight();
	});

	$(window).resize(function(){
		homeMenuItemHeight();
	});

}

$(document).ready(function(){
	siteScript();
});
