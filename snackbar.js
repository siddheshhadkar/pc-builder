function startanimation(inputtext){
	$('.snackbar').finish();
	$('.snackbar .bartext').text(inputtext);
	var snack = $('.snackbar');
	snack.animate({opacity: 0, bottom: '-50%'}, 0);
	snack.animate({opacity: 1, bottom: '35px'}, 600);
	myvar = setTimeout(function(){
		snack.animate({opacity: 0, bottom: '-50%'}, 100);
	}, 4000);
	$('.snackbar span').click(function(){
		clearTimeout(myvar);
		snack.animate({opacity: 0, bottom: '-50%'}, 50);
	});
}
