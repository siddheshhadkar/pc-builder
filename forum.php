<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="forum.css">
	<link rel="stylesheet" type="text/css" href="nouislider/distribute/nouislider.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forumpage</title>
</head>
<body onclick="checkclick(event)">
	<div id="loader">
		<span>L</span>
		<span>O</span>
		<span>A</span>
		<span>D</span>
		<span>I</span>
		<span>N</span>
		<span>G</span>
	</div>
	<div id="container">
		<div class="header">
			<h1 id="drag">practicesite2</h1>
			<div id="hammenu" hidden>
				<div class="ham">
					<span class="sp"></span>
					<span class="sp"></span>
					<span class="sp"></span>
				</div>
				<div class="hamnavbar">
					<ul class="hamhor">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Build A PC</a></li>
						<li><div class="hamtop">
							<a>Compare <img src="images/dropdown2.svg" id="im"></a>
							<div class="hamcompare" hidden>
								<ul class="hamcompareul">
									<li><a href="comparecpu.php">CPU</a></li>
									<li><a href="mobo.php">Motherboard</a></li>
									<li><a href="ram.php">RAM</a></li>
									<li><a href="cabinet.php">Cabinet</a></li>
									<li><a href="psu.php">Powersupply</a></li>
									<li><a href="gpu.php">Graphics Card</a></li>
								</ul>
							</div>
						</div></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="#">Mobiles</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">Reviews</a></li>
						<li><a href="#">How to's</a></li>
					</ul>
				</div>
			</div>
		</div>
    <div class="navbar">
				<ul class="hor">
					<li><a href="index.php">Home</a></li>
					<li><a href="#" title="build your own PC">Build A PC</a></li>
					<li><div class="top" id="topdiv1">
						<a title="compare PC parts" id="top1">Compare<img src="images/dropdown.png" id="im"></a>
						<div class="compare">
							<ul class="compareul">
								<li><a href="comparecpu.php">CPU</a></li>
								<li><a href="mobo.php">Motherboard</a></li>
								<li><a href="ram.php">RAM</a></li>
								<li><a href="cabinet.php">Cabinet</a></li>
								<li><a href="psu.php">Powersupply</a></li>
								<li><a href="gpu.php">Graphics Card</a></li>
							</ul>
						</div>
					</div></li>
					<li id="selected"><a href="forum.php">Forum</a></li>
					<li><a href="#" title="how to">How to's</a></li>
					<li id="more"><div class="top" id="topdiv2">
						<a id="top2">More<img src="images/dropdown.png" id="im"></a>
						<div class="compare">
							<ul class="compareul">
								<li><a href="#">Laptops</a></li>
								<li><a href="#">Mobiles</a></li>
								<li><a href="#" title="latest reviews">Reviews</a></li>
								<li><a href="#" title="latest news">News</a></li>
							</ul>
						</div>
					</div></li>
					<li id="up"><a href="#">Laptops</a></li>
					<li id="up"><a href="#">Mobiles</a></li>
					<li id="up"><a href="#" title="latest reviews">Reviews</a></li>
					<li id="up"><a href="#" title="latest news">News</a></li>
				</ul>
				<div id="tec" hidden><button>SEE</button></div>
        <a id="login" title="login"><img src="images/login.png" id="loginimg"></a>
  			<div id="loginopt">
  				<ul class="loginul">
  					<li><a href="">View your Profile</a></li>
  					<li><a href="">Logout</a></li>
  				</ul>
  			</div>
		</div>
		<div class="header2">
			<h2>Community Name</h2>
		</div>
		<div class="side" id="side">
			<h2>SOMETHING</h2>
			<br><br><br><br><br><br><br><br>
		</div>
		<div class="main" >
				<div id="maintabs">
					<button class="selectedtab" id="posts">POSTS</button><!--
					--><button id="articles">ARTICLES</button><!--
					--><button id="news">NEWS</button><!--
					--><button id="qna">QNA</button>
				</div>
			<div id="cont">
				<div id="searchbardiv">
          <input type="text" name="searchbar" id="searchbar" placeholder="Search..." onkeyup="searchpart()" title="type a part's name" list="searchparts"><!--
          --><img src="images/ryzen.png" title="search">
        </div>
				<span>Sort By :</span>
				<select class="sortselect">
					<option>Latest</option>
					<option>Popular</option>
					<option>All Time Best</option>
				</select>
			</div>
      <div class="maincontent">
        <div id="postscont" class="contentcontainer show">
          	<div class="post">
  					<div class="postdetails">
  						<a href=""><img class="userimg" src="images/ryzen.png"><!--
  						--><p>username and some detailsusername </p></a>
  					<p class="puseropt">&#9679;&#9679;&#9679;</p>
  					</div>
  					<div class="phidoptions">
  						<p>Flag as unappropriate</p>
  						<p>Save this post</p>
  						<p>Dislike</p>
  					</div>
  					<p class="usercaption">Captions if present</p>
  					<div class='postimage'><a href=""><img src="images/ryzen.png"></a></div>
  					<div class="postnumbers">
  						<p><span class="noupvotes">100</span> Upvotes <span class="nocomment">30</span> Comments</p>
  					</div>
  					<div class="postoptions">
  						<p>
  							<button><img src="images/upvote.png"></button><!--
                --><button><img src="images/downvote.png"</button><!--
  							--><button class="commentbutton">Comment</button><!--
  						  --><button><img src="images/share.png"></button>
  						</p>
  						<div class="postcommentdiv">
  							<textarea placeholder="Add a comment..." class="postcomment" name="postcomment" resizable=""></textarea>
  							<button class="submitcomment">Submit</button>
  							<button class="cancelcomment">Cancel</button>
  						</div>
  					</div>
  				</div>
  			<div class="post">
  					<div class="postdetails">
  						<a href=""><img class="userimg" src="images/ryzen.png"><!--
  						--><p>username and some detailsusername and some detailsusername and some detailsusername and some details</p></a>
  					<p class="puseropt">&#9679;&#9679;&#9679;</p>
  					</div>
  					<div class="phidoptions">
  						<p>Flag as unappropriate</p>
  						<p>Save this post</p>
  						<p>Dislike</p>
  					</div>
  					<p class="usercaption">Captions if present</p>
  					<div class='postimage'><a href=""><img src="images/ryzen.png"></a></div>
  					<div class="postnumbers">
  						<p><span class="noupvotes">100</span> Upvotes <span class="nocomment">30</span> Comments</p>
  					</div>
  					<div class="postoptions">
  						<p>
  							<button><img src="images/upvote.png"></button><!--
                --><button><img src="images/downvote.png"</button><!--
  							--><button class="commentbutton">Comment</button><!--
  						  --><button><img src="images/share.png"></button>
  						</p>
  						<div class="postcommentdiv">
  							<textarea placeholder="Add a comment..." class="postcomment" name="postcomment" resizable=""></textarea>
  							<button class="submitcomment">Submit</button>
  							<button class="cancelcomment">Cancel</button>
  						</div>
  					</div>
  				</div>
        </div>
        <div id="articlescont" class="contentcontainer">
          <div class="articles">
  					<div class="postdetails">
  						<a href="">
  						<p class="articletopic">Topic Name</p></a>
  						<p class="auseropt">&#9679;&#9679;&#9679;</p>
  					</div>
  					<div class="ahidoptions">
  						<p>Flag as unappropriate</p>
  						<p>Save this post</p>
  						<p>Dislike</p>
  					</div>
  					<a href=""><p class="usercaption">Art Name</p>
  					<div class="articlecontent">
	  						<p>Article content Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  						</p>
            		</div>
  					<div class="postnumbers">
  						<p><span class="noupvotes">100</span> Upvotes <span class="nocomment">30</span> Comments</p>
  					</div>
					</a>
  					<div class="postoptions">
  						<p>
                <button><img src="images/upvote.png"></button><!--
  							--><button><img src="images/downvote.png"</button><!--
  							--><button class="commentbutton">Comment</button><!--
  							--><button><img src="images/share.png"></button>
  						</p>
  						<div class="postcommentdiv">
  							<textarea placeholder="Add a comment..." class="postcomment" name="postcomment"></textarea>
  							<button class="submitcomment">Submit</button>
  							<button class="cancelcomment">Cancel</button>
  						</div>
  					</div>
  				</div>
        </div>
        <div id="newscont" class="contentcontainer">
          <p>news content</p>
        </div>
        <div id="qnacont" class="contentcontainer">
          <p>qna content</p>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		<div class="right">
			<div id="commdetails">
        <p class="keys">Members : </p>
        <p class="values">1000</p>
        <p class="keys">Articles : </p>
        <p class="values">500</p>
        <p class="keys">Posts : </p>
        <p class="values">450</p>
      </div>
			<div class="moderators">
				<p class="keys">Moderators : </p>
        <p>
          <span class="modname">Siddhesh Hadkar</span>
          <span class="modname">Siddhesh Chadkar</span>
          <span class="modname">Siddhesh Fadkar</span>
          <span class="modname">Siddhesh Badhkar</span>
          <span class="modname">Siddhesh Sadkar</span>
        </p>
			</div>
			<br>
		</div>
		<div class="snackbar">
			<p><span>&#x2715;</span></p>
			<p class='bartext'>hellofriendshavesomesnacksbecauseitssnacktime Lorem ipsum dolor sit amet, consectetur</p>
		</div>
		<div class="footer">
			<p>&copy all rights reserved</p>
			<p class="inli">Follow us on</p>
			<br><br><br>
			<br><br><br>
			<br><br><br>
			<ul class="bottomimg">

			</ul>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jqueryui/jquery-ui.js"></script>
	<script type="text/javascript" src="nouislider/distribute/nouislider.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript" src="forum.js"></script>
	<script type="text/javascript" src="clickable4.js"></script>
	<script type="text/javascript" src="loader.js"></script>
</body>
</html>
