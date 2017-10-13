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

	var aboutParalax = function(){
		if ( $('.about').length < 1 ) {
			return false;
		}		
		var h1 = parseInt($('.about .about__rocket_2').css('top'), 10);
		$(window).scroll(function(){ 
			var h = $(window).scrollTop();	
			$('.about .about__rocket_2').css('top', (h1+(h*0.07)) + 'px');
		});
	}

	$('.menu_page__nav div').click(function(){
		var name = $(this).data('name');
		$(this).addClass('act').siblings().removeClass('act');

		$('.menu_page__content article').removeClass('act');
		$('.menu_page__content__'+name).addClass('act');
	});

	$(window).load(function(){
		aboutParalax();
		homeMenuItemHeight();

		if ( $('[data-fancybox]').length > 0 ) {
			$('[data-fancybox]').fancybox({
				loop : true,
				buttons : [
			        'close'
			    ],
			});
		}		

		
	});

	$('.gallery .item').click(function(){
		var index = $(this).data('index');
		$('.content.gallery').hide();
		$('.content.photos__'+index).show();
		$('.grid').masonry({
		  	itemSelector: '.grid-item'
		});
	});

	$('.back a').click(function(){
		$('.content.photos').hide();
		$('.content.gallery').show();	
		$('html,body').animate({ scrollTop: 0 });	
	});

	$(window).resize(function(){
		homeMenuItemHeight();
	});

}();

