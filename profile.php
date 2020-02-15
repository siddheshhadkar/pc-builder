<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="profile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profilepage</title>
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
		<div class="navbar">
				<ul class="hor">
					<li id="selected"><a href="index.php">Home</a></li>
					<li><a href="build2.php" title="build your own PC">Build A PC</a></li>
					<li><div class="top" id="topdiv1">
						<a title="compare PC parts" id="top1">Compare<img src="images/dropdown.png" id="im"></a>
						<div class="compare">
							<ul class="compareul">
								<li><a href="comparecpu.php">CPU</a></li>
								<li><a href="comparemobo.php">Motherboard</a></li>
								<li><a href="compareram.php">RAM</a></li>
								<li><a href="comparecabinet.php">Cabinet</a></li>
								<li><a href="comparepsu.php">Powersupply</a></li>
								<li><a href="comparegpu.php">Graphics Card</a></li>
							</ul>
						</div>
					</div></li>
					<li><a href="#">Forum</a></li>
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
				<a id="login" title="get started"><img src="images/login.png" id="loginimg"></a>
				<div id="loginopt">
					<ul class="loginul">
						<li><a href="profile.php">View your Profile</a></li>
						<li><a href="">Logout</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">SignUp</a></li>
						<li><a href="">Delete Account</a></li>
					</ul>
				</div>
		</div>
		<div class="header">
			<h1>background image</h1>
			<div id="hammenu" hidden>
				<div class="ham">
					<span class="sp"></span>
					<span class="sp"></span>
					<span class="sp"></span>
				</div>
				<div class="hamnavbar">
					<ul class="hamhor">
						<li><a href="#">Home</a></li>
						<li><a href="build2.php">Build A PC</a></li>
						<li><div class="hamtop">
							<a>Compare <img src="images/dropdown2.svg" id="im"></a>
							<div class="hamcompare" hidden>
								<ul class="hamcompareul">
									<li><a href="comparecpu.php">CPU</a></li>
									<li><a href="comparemobo.php">Motherboard</a></li>
									<li><a href="compareram.php">RAM</a></li>
									<li><a href="comparecabinet.php">Cabinet</a></li>
									<li><a href="comparepsu.php">Powersupply</a></li>
									<li><a href="comparegpu.php">Graphics Card</a></li>
								</ul>
							</div>
						</div></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Mobiles</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">Reviews</a></li>
						<li><a href="#">How to's</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="navbar1">
				<div class="userdetails" id="username">
					<p>USERNAME</p>
				</div>
				<div class="userdetails">
					<p>BUILDS</p>
					<p class="numbers">100</p>
				</div>
				<div class="userdetails" id="userimage">
					<label for="imagefile">EDIT</label>
					<input id="imagefile" type="file" style="visibility : hidden">
				</div>
				<div class="userdetails">
					<p>ARTICLES</p>
					<p class="numbers">50</p>
				</div>
				<div class="userdetails">
					<p>REPUTATION</p>
					<p><span id="repno">10</span><span id="replevel">MASTER</span></p>
				</div>
		</div>
		<div class="side">
				<div class="sidedetails">
					<p id="followers"><a>Followers<span>100</span></a></p>
					<p id="following"><a>Following<span>200</span></a></p>
				</div>
				<div class="sidedetails">
					<h3>Links</h3>
					<button id="linkadd">+ Add a link</button>
					<div id="addlink">
						<form>
							<select id="linktype">
								<option>Select an option</option>
								<option>Twitter</option>
								<option>Instagram</option>
								<option>Facebook</option>
								<option>GitHub</option>
								<option>Reddit</option>
								<option>Pinterest</option>
								<option>Website</option>
							</select>
							<div id="hid" hidden>
								<label for="linkurl" id="linklabel"></label>
								<input type="text" id="linkurl">
								<input type="submit" value="Submit">
								<input type="button" value="Cancel" id="can">
							</div>
						</form>
					</div>
					<br>
					<a class="links">Twitter</a>
					<a class="links">Github</a>
					<a class="links">Instagram</a>
					<a class="links">Website</a>
				</div>
		</div>
		<div class="main">
			<div class = "postcontainer">
				<div class="post"><a href="#">
					<div class="postdetails">
						<img class="userimg" src="images/ryzen.png">
						<p>username and some details username and some details username and some details</p>
					</a><p class="useropt">&#9679;&#9679;&#9679;</p>
					</div>
					<div class="hidoptions">
						<p>Flag as unappropriate</p>
						<p>Save this post</p>
						<p>Dislike</p>
					</div>
					<a href="#">
					<p class="usercaption">Captions if present</p>
					<div class='postimage'><img src="images/ryzen.png"></div>
					<div class="postnumbers">
						<p><span class="nolikes">100</span> Likes <span class="nocomment">30</span> Comments</p>
					</div></a>
					<div class="postoptions">
						<p>
							<button>Like</button>
							<button class="commentbutton">Comment</button>
							<button>Share</button>
							<button id="otheropt">ooo</button>
						</p>
						<div class="postcommentdiv">
							<textarea placeholder="Add a comment..." class="postcomment" name="postcomment"></textarea>
							<button class="submitcomment">Submit</button>
							<button class="cancelcomment">Cancel</button>
						</div>
					</div>
				</div>
				<div class="post"><a href="#">
					<div class="postdetails">
						<img class="userimg" src="images/ryzen.png">
						<p>username and some details username and some details username and some details</p>
					</a><p class="useropt">&#9679;&#9679;&#9679;</p>
					</div>
					<div class="hidoptions">
						<p>Flag as unappropriate</p>
						<p>Save this post</p>
						<p>Dislike</p>
					</div>
					<a href="#">
					<p class="usercaption">Captions if present</p>
					<div class='postimage'><img src="images/ryzen.png"></div>
					<div class="postnumbers">
						<p><span class="nolikes">100</span> Likes <span class="nocomment">30</span> Comments</p>
					</div></a>
					<div class="postoptions">
						<p>
							<button>Like</button>
							<button class="commentbutton">Comment</button>
							<button>Share</button>
							<button id="otheropt">ooo</button>
						</p>
						<div class="postcommentdiv">
							<textarea placeholder="Add a comment..." class="postcomment" name="postcomment"></textarea>
							<button class="submitcomment">Submit</button>
							<button class="cancelcomment">Cancel</button>
						</div>
					</div>
				</div>
				<div class="post articles"><a href="#">
					<div class="postdetails">
						<img class="userimg" src="images/ryzen.png">
						<p>username and some details username and some details username and some details</p>
					</a><p class="useropt">&#9679;&#9679;&#9679;</p>
					</div>
					<div class="hidoptions">
						<p>Flag as unappropriate</p>
						<p>Save this post</p>
						<p>Dislike</p>
					</div>
					<a href="#">
					<p class="usercaption">Art Name</p>
					<div class="articlecontent">
						<p>Article content Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<span class="readmore">Read More...</span>
					</div>
					<div class="postnumbers">
						<p><span class="nolikes">100</span> Likes <span class="nocomment">30</span> Comments</p>
					</div></a>
					<div class="postoptions">
						<p>
							<button>Like</button>
							<button class="commentbutton">Comment</button>
							<button>Share</button>
							<button id="otheropt">ooo</button>
						</p>
						<div class="postcommentdiv">
							<textarea placeholder="Add a comment..." class="postcomment" name="postcomment"></textarea>
							<button class="submitcomment">Submit</button>
							<button class="cancelcomment">Cancel</button>
						</div>
					</div>
				</div>
				<div class="post articles">
					<div class="postdetails">
						<img class="userimg" src="images/ryzen.png">
						<p>username and some details username and some details username and some details</p>
						<p class="useropt">&#9679;&#9679;&#9679;</p>
					</div>
					<div class="hidoptions">
						<p>Flag as unappropriate</p>
						<p>Save this post</p>
						<p>Dislike</p>
					</div>
					<p class="usercaption">Art Name</p>
					<div class="articlecontent">
						<p>Article content Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
						<span class="readmore">Read More...</span>
					</div>
					<div class="postnumbers">
						<p><span class="nolikes">100</span> Likes <span class="nocomment">30</span> Comments</p>
					</div>
					<div class="postoptions">
						<p>
							<button>Like</button>
							<button class="commentbutton">Comment</button>
							<button>Share</button>
							<button id="otheropt">ooo</button>
						</p>
						<div class="postcommentdiv">
							<textarea placeholder="Add a comment..." class="postcomment" name="postcomment"></textarea>
							<button class="submitcomment">Submit</button>
							<button class="cancelcomment">Cancel</button>
						</div>
					</div>
				</div>
				</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br>
		</div>
		<div class="right">
			<div class="article">
				<a href="#"><img src="images/ryzen.png"></a>
				<p>Ryzen 3000 series to be released at CES!!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</p>
			</div>
			<div class="article">
				<a href="#"><img src="images/ryzen.png"></a>
				<p>Ryzen 3000 series to be released at CES!!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</p>
			</div>
			<br>
		</div>
		<div class="footer">
			<p>&copy all rights reserved</p>
			<p class="inli">Follow us on</p>
			<ul class="bottomimg">

			</ul>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="profile.js"></script>
	<script type="text/javascript" src="loader.js"></script>
	<script type="text/javascript" src="clickable4.js"></script>
</body>
</html>
