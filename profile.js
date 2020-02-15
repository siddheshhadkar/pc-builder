$(document).ready(function(){
	var wid = $(window).width();
	if(wid > 1009 || wid <= 452){
		$('.main').css("width", wid-500);
		$('.side').removeClass('scr');
	}
	else{
		$('.main').css("width", wid-170);
		$('.side').addClass('scr');
	}
	var optpos = $('.useropt').offset();
	$('.hidoptions').css('left', optpos.left);
	$(window).resize(function(){
		var optpos = $('.useropt').offset();
		$('.hidoptions').css('left', optpos.left-95);
		var wid = $(window).width();
		if(wid > 1009 || wid <= 452){
			$('.main').css("width", wid-500);
			$('.side').removeClass('scr');
		}
		else{
			$('.main').css("width", wid-170);
			$('.side').addClass('scr');
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
  $("#linkadd").click(function(){
    $('#addlink').toggleClass('sho');
  });
  $('#can').click(function(){
    $('#addlink').removeClass('sho');
  });
  $('#linktype').change(function(){
    var v = $(this).val();
    if(v == "Select an option"){
      $('#hid').css('display', 'none');
    }
    else{
      $('#hid').css('display', 'block');
      $('#linklabel').text("Add "+ v +" username : ");
      if(v == "Facebook"){
        $('#linklabel').text("Add link to Facebook profile : ");
      }
      if(v == "Website"){
        $('#linklabel').text("Add a link to Website : ");
      }
    }
  });
	$(".commentbutton").click(function(){
		$(this).parent().next().toggleClass('sho').find('textarea').focus();
	});
	$('.cancelcomment').click(function(){
		$(this).prev().prev().val('').parent().removeClass('sho');
	});
	$('.useropt').click(function(){
		$(this).parent().next().toggleClass('shown');
	});
	$('.articlecontent').each(function(){
		var artwid = $(this).height();
		var read = $(this).find('.readmore');
		if(artwid >= 150){
			$(read).css('display', 'block');
		}
		else{
			$(read).css('display', 'none');
		}
	});
	$('.readmore').click(function(){
		$(this).parent().toggleClass('hi');
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
