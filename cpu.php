<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="cpu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productpage</title>
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
			<h1>practicesite2</h1>
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
		<div class="side" id="side">
			<h2>PARTS</h2>
			<ul class="sidenav">
				<li id="hov1"><a href="cpu.php" id="hov2">CPU<img src="images/cpu.png" class="sideimg" id="hov3"></a></li>
				<li><a href="mobo.php">Motherboard<img src="images/mobo.png" class="sideimg"></a></li>
				<li><a href="ram.php">RAM<img src="images/ram.svg" class="sideimg"></a></li>
				<li><a href="gpu.php">Graphics Card<img src="images/gpu.png" class="sideimg"></a></li>
				<li><a href="storage.php">Storage<img src="images/hdd.png" class="sideimg"></a></li>
				<li><a href="cabinet.php">Cabinet<img src="images/cabinet.png" class="sideimg"></a></li>
				<li><a href="psu.php">PowerSupply<img src="images/psu.png" class="sideimg"></a></li>
				<li><a href="cooling.php">Cooling<img src="images/cooler.png" class="sideimg"></a></li>
				<li><a href="monitor.php">Monitor<img src="images/monitor.png" class="sideimg"></a></li>
			</ul>
		</div>
		<div class="main">
			<div class="topsearchdiv">
				<div class="searchdiv">
				<input type="text" name="searchpart" id="searchpart">
				<img src="images/ry.jpg" title="Go">
			</div>
			<a href="comparecpu.php" id="com">Go to Compare</a>
			</div>
			<div class="mainparts">
				<div class="partcard">
					<img src="images/ry.jpg">
					<a class="productname" title="View Full Details" href="cpuproduct.php">AMD Ryzen 3  1200 (YD1200BBAEBOX) </a>
					<p class="productdetails">
						<span class="productrating">
							<span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span>
						</span>
						<span class="productprice">10000</span>
					</p>
					<p class="comp"><input type="checkbox" name="addtocom" id="addtocom1"><label for="addtocom1">Compare</label></p>
					<p class="bpc"><input type="checkbox" name="addtobpc" id="addtobpc1"><label for="addtobpc1">Add to Build</label></p>
				</div>
				<div class="partcard">
					<img src="images/ry.jpg">
					<a class="productname" title="View Full Details">AMD Ryzen 3 1200 (YD1200BBAEBOX)</a>
					<p class="productdetails">
						<span class="productrating">
							<span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span>
						</span>
						<span class="productprice">10000</span>
					</p>
					<p class="comp"><input type="checkbox" name="addtocom" id="addtocom1"><label for="addtocom1">Compare</label></p>
				</div>
				<div class="partcard">
					<img src="images/ry.jpg">
					<a class="productname" title="View Full Details">AMD Ryzen 3 1200 (YD1200BBAEBOX)</a>
					<p class="productdetails">
						<span class="productrating">
							<span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span>
						</span>
						<span class="productprice">10000</span>
					</p>
					<p class="comp"><input type="checkbox" name="addtocom" id="addtocom1"><label for="addtocom1">Compare</label></p>
				</div>
				<div class="partcard">
					<img src="images/ry.jpg">
					<a class="productname" title="View Full Details">AMD Ryzen 3 1200 (YD1200BBAEBOX)</a>
					<p class="productdetails">
						<span class="productrating">
							<span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span>
						</span>
						<span class="productprice">10000</span>
					</p>
					<p class="comp"><input type="checkbox" name="addtocom" id="addtocom1"><label for="addtocom1">Compare</label></p>
				</div>
				<div class="partcard">
					<img src="images/ry.jpg">
					<a class="productname" title="View Full Details">AMD Ryzen 3 1200 (YD1200BBAEBOX)</a>
					<p class="productdetails">
						<span class="productrating">
							<span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span>
						</span>
						<span class="productprice">10000</span>
					</p>
					<p class="comp"><input type="checkbox" name="addtocom" id="addtocom1"><label for="addtocom1">Compare</label></p>
				</div>
				<div class="partcard">
					<img src="images/ry.jpg">
					<a class="productname" title="View Full Details">AMD Ryzen 3 1200 (YD1200BBAEBOX)</a>
					<p class="productdetails">
						<span class="productrating">
							<span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span>
						</span>
						<span class="productprice">10000</span>
					</p>
					<p class="comp"><input type="checkbox" name="addtocom" id="addtocom1"><label for="addtocom1">Compare</label></p>
				</div>
				<div class="partcard">
					<img src="images/ry.jpg">
					<a class="productname" title="View Full Details">AMD Ryzen 3 1200 (YD1200BBAEBOX)</a>
					<p class="productdetails">
						<span class="productrating">
							<span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span>
						</span>
						<span class="productprice">10000</span>
					</p>
					<p class="comp"><input type="checkbox" name="addtocom" id="addtocom1"><label for="addtocom1">Compare</label></p>
				</div>
				<div class="partcard">
					<img src="images/ry.jpg">
					<a class="productname" title="View Full Details">AMD Ryzen 3 1200 (YD1200BBAEBOX)</a>
					<p class="productdetails">
						<span class="productrating">
							<span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span><span class="star">&#x2605;</span>
						</span>
						<span class="productprice">10000</span>
					</p>
					<p class="comp"><input type="checkbox" name="addtocom" id="addtocom1"><label for="addtocom1">Compare</label></p>
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
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript" src="cpu.js"></script>
	<script type="text/javascript" src="select.js"></script>
	<script type="text/javascript" src="clickable.js"></script>
	<script type="text/javascript" src="loader.js"></script>
</body>
</html>
