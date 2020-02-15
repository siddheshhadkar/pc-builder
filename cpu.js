$(document).ready(function(){
	var ma = $('.main').width();
	$('.searchdiv').width(ma-150);
	var searchdiv = $('.searchdiv').width();
	$('#searchpart').width(searchdiv-57);
	if(ma>=700 && ma<1000){
		$('.mainparts').addClass('four');
	}
	else{
		$('.mainparts').removeClass('four');
	}
	if(ma<700){
		$('.mainparts').addClass('three');
	}
	else{
		$('.mainparts').removeClass('three');
	}
	$(window).resize(function(){
		var ma = $('.main').width();
		$('.searchdiv').width(ma-150);
		var searchdiv = $('.searchdiv').width();
		$('#searchpart').width(searchdiv-57);
		if(ma>=700 && ma<1000){
			$('.mainparts').addClass('four');
		}
		else{
			$('.mainparts').removeClass('four');
		}
		if(ma<700){
			$('.mainparts').addClass('three');
		}
		else{
			$('.mainparts').removeClass('three');
		}
	});
});