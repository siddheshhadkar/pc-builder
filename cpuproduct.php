<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="product.css">
	<link rel="stylesheet" type="text/css" href="snackbar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ProductInfo</title>
</head>
<body>
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
			<h1>image slide is temp</h1>
			<button class="parts" id="parts" hidden>Parts <img src="images/dropdown.png" id="im"></button>
			<a id="login" title="login"><img src="images/login.png" id="loginimg"></a>
			<div id="loginopt">
				<ul class="loginul">
					<li><a href="">View your Profile</a></li>
					<li><a href="">Logout</a></li>
				</ul>
			</div>
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
		<div class="navbar">
				<ul class="hor">
					<li><a href="index.php">Home</a></li>
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
		</div>
		<div class="main">
			<div class="contentdiv">
				<div class="tabs">
					<button class="tabbuttons active" id="spec">SPECS</button><!--
					--><button class="tabbuttons" id="review">REVIEWS</button><!--
				--><button class="tabbuttons" id="qna">QNA</button>
				</div><!--
			 --><div class="content">
			 		<div class="specdiv" id="specs">
			 			<div class="spectable">
			 				<div class="specgroup">
			 					<p class="specheader">Model</p>
			 					<p class="specdetails">
			 						<span class="specname">Name</span><!--
			 						--><span class="specdet">AMD 1300X </span>
			 					</p>
			 					<p class="specdetails">
			 						<span class="specname">Brand</span><!--
			 						--><span class="specdet">AMD</span>
			 					</p>
			 					<p class="specdetails">
			 						<span class="specname">Series</span><!--
			 						--><span class="specdet">Ryzen 3</span>
			 					</p>
			 				</div>
			 				<div class="specgroup">
			 					<p class="specheader">Details</p>
			 					<p class="specdetails">
			 						<span class="specname">Socket Type</span><!--
			 						--><span class="specdet">AM4</span>
			 					</p>
			 					<p class="specdetails">
			 						<span class="specname">Cores</span><!--
			 						--><span class="specdet">6</span>
			 					</p>
			 					<p class="specdetails">
			 						<span class="specname">Threads</span><!--
			 						--><span class="specdet">12</span>
			 					</p>
			 					<p class="specdetails">
			 						<span class="specname">BCLK</span><!--
			 						--><span class="specdet">3.4Ghz</span>
			 					</p>
			 					<p class="specdetails">
			 						<span class="specname">TCLK</span><!--
			 						--><span class="specdet">4.Ghz</span>
			 					</p>
			 				</div>
			 			</div>
			 		</div>
			 		<div class="specdiv" hidden id="reviews">
						<div class="rate">
							<p>Rate this product : </p>
							<p class="stars">
								<svg height="30" width="35" data-value="1" class="ac">
									<polygon points="20,0 10,30 35,10 5,10 30,30"/>
								</svg><!--
								--><svg height="30" width="35" data-value="2">
									<polygon points="20,0 10,30 35,10 5,10 30,30"/>
								--></svg><!--
								--><svg height="30" width="35" data-value="3">
									<polygon points="20,0 10,30 35,10 5,10 30,30"/>
								--></svg><!--
								--><svg height="30" width="35" data-value="4">
									<polygon points="20,0 10,30 35,10 5,10 30,30"/>
								--></svg><!--
								--><svg height="30" width="35" data-value="5">
									<polygon points="20,0 10,30 35,10 5,10 30,30"/>
								</svg>
							</p>
						</div>
			 			<div class="reviewdiv">
							<textarea id="addreview" placeholder="Add a review..."></textarea>
							<p class="reviewbuttons">
								<button class="buttons">SUBMIT</button>
								<button class="buttons cancelbut">CANCEL</button>
							</p>
						</div>
						<div class="userreviews">
							<div class="review" id="review1">
								<div class="userdetails">
									<img src="images/ryzen.png">
									<p>username</p>
									<p class="starsgiven">STARS GIVEN</p>
								</div>
								<div id="reviewcontent"><p>THIS is the REVIEW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								<div class="reviewstats">
									<img src="images/upvote.png" class="stats statimg">
									<span class="stats">111</span>
									<img src="images/downvote.png" class="stats statimg">
									<a class="reviewlink stats"><img src="images/share.png"></a>
									<div class="pa">
										<input type="text" class="linkurl">
										<button class="copylink">Copy Link</button>
									</div>
								</div>
							</div>
							<div class="review" id="review2">
								<div class="userdetails">
									<img src="images/ryzen.png">
									<p>username</p>
									<p class="starsgiven">STARS GIVEN</p>
								</div>
								<div id="reviewcontent"><p>THIS is the REVIEW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								<div class="reviewstats">
									<img src="images/upvote.png" class="stats statimg">
									<span class="stats">111</span>
									<img src="images/downvote.png" class="stats statimg">
									<a class="reviewlink stats"><img src="images/share.png"></a>
									<div class="pa">
										<input type="text" class="linkurl">
										<button class="copylink">Copy Link</button>
									</div>
								</div>
							</div>
							<div class="review" id="review3">
								<div class="userdetails">
									<img src="images/ryzen.png">
									<p>username</p>
									<p class="starsgiven">STARS GIVEN</p>
								</div>
								<div id="reviewcontent"><p>THIS is the REVIEW Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								<div class="reviewstats">
									<img src="images/upvote.png" class="stats statimg">
									<span class="stats">111</span>
									<img src="images/downvote.png" class="stats statimg">
									<a class="reviewlink stats"><img src="images/share.png"></a>
									<div class="pa">
										<input type="text" class="linkurl">
										<button class="copylink">Copy Link</button>
									</div>
								</div>
							</div>
						</div>
			 		</div>
			 		<div class="specdiv" id="qnas" hidden>
			 			<div class="ask">
							<textarea id="askques" placeholder="Ask a Question..."></textarea>
							<p class="reviewbuttons">
								<button class="buttons">SUBMIT</button>
								<button class="buttons cancelbut">CANCEL</button>
							</p>
						</div>
						<div class="userques">
							<div class="questiondiv" id="question1">
								<div class="question"><p>A Question</p></div>
								<div class="topanswer"><p>The Top Voted Answer Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								<div class="answerstats">
									<img src="images/upvote.png" class="stats statimg">
									<span class="stats">112</span>
									<img src="images/downvote.png" class="stats statimg">
									<a class="reviewlink stats"><img src="images/share.png"></a>
									<div class="pa">
										<input type="text" class="linkurl">
										<button class="copylink">Copy Link</button>
									</div>
									<div class="options">
										<span class="giveanswer">Submit An Answer</span>
										<a href="question.php"><span class="viewanswers">View All Answers >></span></a>
									</div>
									<div class="submitans">
										<textarea class="answerarea" placeholder="Submit an Answer..."></textarea>
										<button>Submit</button>
										<button class="cancel">Cancel</button>
									</div>
								</div>
							</div>
							<div class="questiondiv" id="question2">
								<div class="question"><p>A Question2</p></div>
								<div class="topanswer"><p>The Top Voted Answer Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								<div class="answerstats">
									<img src="images/upvote.png" class="stats statimg">
									<span class="stats">112</span>
									<img src="images/downvote.png" class="stats statimg">
									<a class="reviewlink stats"><img src="images/share.png"></a>
									<div class="pa">
										<input type="text" class="linkurl">
										<button class="copylink">Copy Link</button>
									</div>
									<div class="options">
										<span class="giveanswer">Submit An Answer</span>
										<a href="question.php"><span class="viewanswers">View All Answers >></span></a>
									</div>
									<div class="submitans">
										<textarea class="answerarea" placeholder="Submit an Answer..."></textarea>
										<button>Submit</button>
										<button class="cancel">Cancel</button>
									</div>
								</div>
							</div>
							<div class="questiondiv" id="question3">
								<div class="question"><p>A Question3</p></div>
								<div class="topanswer"><p>The Top Voted Answer Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								<div class="answerstats">
									<img src="images/upvote.png" class="stats statimg">
									<span class="stats">112</span>
									<img src="images/downvote.png" class="stats statimg">
									<a class="reviewlink stats"><img src="images/share.png"></a>
									<div class="pa">
										<input type="text" class="linkurl">
										<button class="copylink">Copy Link</button>
									</div>
									<div class="options">
										<span class="giveanswer">Submit An Answer</span>
										<a href="question.php"><span class="viewanswers">View All Answers >></span></a>
									</div>
									<div class="submitans">
										<textarea class="answerarea" placeholder="Submit an Answer..."></textarea>
										<button>Submit</button>
										<button class="cancel">Cancel</button>
									</div>
								</div>
							</div>
						</div>
			 		</div>
				</div>
			</div>
			<div class="snackbar">
				<p><span>&#x2715;</span></p>
				<p class='bartext'>hellofriendshavesomesnacksbecauseitssnacktime Lorem ipsum dolor sit amet, consectetur</p>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br>
		</div>
		<div class="footer">
			<p>&copy all rights reserved</p>
			<p class="inli">Follow us on</p>
			<ul class="bottomimg">

			</ul>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="link.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript" src="product.js"></script>
	<script type="text/javascript" src="snackbar.js"></script>
	<script type="text/javascript" src="loader.js"></script>
</body>
</html>
