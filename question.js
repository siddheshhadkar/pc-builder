$(document).ready(function(){
  $('.link').click(function(){
    var pa = window.location.href;
    $(this).next().toggleClass('show').find('.linkurl').val(pa);
  });
  $('.copylink').click(function(){
    $(this).prev().select();
    document.execCommand('copy');
  });
});
