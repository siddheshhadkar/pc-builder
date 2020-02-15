var articlearr = [
  {image: "images/ryzen.png", topic:"Some topic 1", aname:"some name1", description: 'Lorem LoremLoremLorem Lorem Lorem Lorem LoremLorem', upvotes: 1500, downvotes:120 , comments: 100},
  {image: "images/ryzen.png", topic:"Some topic 2", aname:"some name2", description: 'hellofriendshavesomesnacksbecauseitssnacktime hellofriendshavesomesnacksbecauseitssnacktime hellofriendshavesomesnacksbecauseitssnacktime hellofriendshavesomesnacksbecauseitssnacktime', upvotes: 1540, downvotes:20 , comments: 1010},
  {image: "images/ryzen.png", topic:"Some topic 3", aname:"some name3", description: 'Lorem LoremLoremLorem Lorem Lorem Lorem LoremLorem', upvotes: 150, downvotes:200 , comments: 100},
  {image: "images/ryzen.png", topic:"Some topic 4", aname:"some name4", description:'Lorem LoremLoremLorem Lorem Lorem Lorem LoremLorem Lorem LoremLoremLorem Lorem Lorem Lorem LoremLorem Lorem LoremLoremLorem Lorem Lorem Lorem LoremLorem', upvotes: 15, downvotes:20 , comments: 1},
  {image: "", topic:"Some topic 5", name:"some name5", description: 'Lorem', upvotes: 1, downvotes:0 , comments: 100}
];
var i=0;
for(i=0;i<articlearr.length;i++){
	if(articlearr[i].image != ''){
    $('#articlescont').append('<div class="articles"><div class="postdetails"><a href=""><p class="articletopic">'+articlearr[i].topic+'</p></a><p class="auseropt">&#9679;&#9679;&#9679;</p></div><div class="ahidoptions"><p>Flag as unappropriate</p><p>Save this post</p><p>Dislike</p></div><a href=""><p class="usercaption">'+articlearr[i].aname+'</p><div class="articlecontent"><p>'+articlearr[i].description+'</p></div><div class="postnumbers"><p><span class="noupvotes">100</span> Upvotes <span class="nocomment">30</span> Comments</p></div></a><div class="postoptions"><p><button><img src="images/upvote.png"></button><!----><button><img src="images/downvote.png"</button><!----><button class="commentbutton">Comment</button><!----><button><img src="images/share.png"></button></p><div class="postcommentdiv"><textarea placeholder="Add a comment..." class="postcomment" name="postcomment"></textarea><button class="submitcomment">Submit</button><button class="cancelcomment">Cancel</button></div></div></div>');
  }
  else{
    $('#articlescont').append('<div class="articles"><div class="postdetails"><a href=""><p class="articletopic">'+articlearr[i].topic+'</p></a><p class="auseropt">&#9679;&#9679;&#9679;</p></div><div class="ahidoptions"><p>Flag as unappropriate</p><p>Save this post</p><p>Dislike</p></div><a href=""><p class="usercaption">'+articlearr[i].aname+'</p><div class="articlecontent"><p>'+articlearr[i].description+'</p>></div><div class="postnumbers"><p><span class="noupvotes">100</span> Upvotes <span class="nocomment">30</span> Comments</p></div></a><div class="postoptions"><p><button><img src="images/upvote.png"></button><!----><button><img src="images/downvote.png"</button><!----><button class="commentbutton">Comment</button><!----><button><img src="images/share.png"></button></p><div class="postcommentdiv"><textarea placeholder="Add a comment..." class="postcomment" name="postcomment"></textarea><button class="submitcomment">Submit</button><button class="cancelcomment">Cancel</button></div></div></div>');
  }
}

$(document).ready(function(){
  var x = $('#cont').width();
  $('#searchbardiv').css('width', x-198);
  $('#searchbar').css('width', $('#searchbardiv').width()-30);
  var ppos = $('.puseropt').position();
  $('.phidoptions').css('left', ppos.left+23);
  $(window).resize(function(){
    var x = $('#cont').width();
    $('#searchbardiv').css('width', x-198);
    $('#searchbar').css('width', $('#searchbardiv').width()-30);
    var ppos = $(".puseropt").position();
    $('.phidoptions').css('left', ppos.left+23);
  });
  $('#maintabs button').click(function(){
    $('#maintabs button').removeClass('selectedtab');
    $(this).addClass('selectedtab');
    var tabid = $(this).attr('id');
    if(tabid=='posts'){
      $('#cont').removeClass('sho');
    }
    else{
        $('#cont').addClass('sho');
    }
    tabid = tabid+'cont';
    $('.contentcontainer').removeClass('show');
    $('[id="'+tabid+'"]').addClass('show');
  });
  $('.puseropt').click(function(){
    $(this).parent().next().toggleClass('shown');
  });
  $('.auseropt').click(function(){
    $(this).parent().next().toggleClass('shown');
  });
	$(".commentbutton").click(function(){
		$(this).parent().next().toggleClass('sho').find('textarea').focus();
	});
  $('.cancelcomment').click(function(){
		$(this).prev().prev().val('').parent().removeClass('sho');
	});
});
