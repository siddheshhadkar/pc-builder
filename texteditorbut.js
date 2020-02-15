$('#but').click(function(){
	var t = rtf.document.body.innerHTML;
	$('#text').text(t);
});
$('#com button').click(function(){
	rtf.document.body.focus();
});
$('#com select').change(function(){
	rtf.document.body.focus();
});