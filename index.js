$(document).ready(function(){
	var wid = $(window).width();
	if(wid > 1010 || wid <= 453){
		$('.main').css("width", wid-451);
		$('.side').removeClass('scr');
	}
	else{
		$('.main').css("width", wid-170);
		$('.side').addClass('scr');
	}
	$(window).resize(function(){
		var wid = $(window).width();
		if(wid > 1010 || wid <= 453){
			$('.main').css("width", wid-451);
			$('.side').removeClass('scr');
		}
		else{
			$('.main').css("width", wid-170);
			$('.side').addClass('scr');
		}
	});
	$(window).scroll(function(){
		var a = $('.header').height();
		var x = $('body').scrollTop();
		if($(window).width() >= 454){
			if(x>=a){
				$('.side').addClass('sidescrolled');
				var height = $('.navbar').height();
				$('.side.sidescrolled').css("top", height);
			}
			else{
				$('.side').removeClass('sidescrolled');
				$('.side').css("top", 0);
			}
		}
	});
	$('.top').click(function(){
		$(this).toggleClass('cli')
	});
	$('#login').click(function(){
		$('#loginopt').toggleClass('shown');
	});
	$('.compareul li a').hover(function(){
		$(this).toggleClass('hover3').find('img').toggleClass('hover3');
	});
	$('.sidenav li').hover(function(){
		$(this).toggleClass('hover2').find('a').toggleClass('hover2');
	});

	//Mobile
	$('.hamtop').hover(function(){
		$('.hamcompare').slideDown(100);
	}, function(){
		$('.hamcompare').slideUp(100);
	});
	$('.ham').click(function(){
		$('.ham').toggleClass('cl');
		$('.hamnavbar').toggleClass('close');
		$('body').toggleClass('overlay');
		$('.ham span').first().toggleClass('rotate1').next().toggleClass('disapp').next().toggleClass('rotate2');
	});
	$('.parts').click(function(){
		if($('.side').hasClass('act')){
			$('.side').removeClass('act');
		}
		else{
			$('.side').addClass('act');
		}
	});
});
