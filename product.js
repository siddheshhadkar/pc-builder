$(document).ready(function(){
	$('.tabbuttons').click(function(){
		$('.tabbuttons').removeClass('active');
		$(this).addClass('active');
		var bid = $(this).attr('id');
		bid = bid+'s';
		$('.specdiv').hide();
		$('[id="'+ bid +'"]').show();
	});
	var n = $('svg').length;
	$('svg').click(function(){
		$('svg').removeClass('ac');
		var m = $(this).data('value');
		for(i=1;i<=m;i++){
			$('[data-value="'+i+'"]').addClass('ac');
		}
	});
	$('svg').hover(function(){
		var m = $(this).data('value');
		for(i=1;i<=m;i++){
			$('[data-value="'+i+'"]').toggleClass('hov');
		}
	});
	$('.reviewlink').click(function(){
		var pa = "#" + $(this).parent().parent().attr('id');
		pa = window.location.href + pa;
		$(this).next().toggleClass('show').find('.linkurl').val(pa);
	});
	$('.copylink').click(function(){
		$(this).prev().select();
		document.execCommand('copy');
	});
	$('.giveanswer').click(function(){
		$(this).parent().next().toggleClass('show').find('.answerarea').focus();
	});
	$('.cancel').click(function(){
		$(this).parent().removeClass('show').find('.answerarea').val('');
	});
	$('.cancelbut').click(function(){
		$(this).parent().prev().val('');
	});
});
