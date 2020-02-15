var x = window.location.href;
if(x.includes('#review')){
  $('.specdiv').hide();
  $('#reviews').show();
  $('.tabbuttons').removeClass('active');
  $('#review').addClass('active');
}
if(x.includes('#question')){
  $('.specdiv').hide();
  $('#qnas').show();
  $('.tabbuttons').removeClass('active');
  $('#qna').addClass('active');
}
$(document).ready(function(){
  setTimeout(function(){
    var y = $(window).scrollTop();
    $(window).scrollTop(y-50);
  }, 50);
});
