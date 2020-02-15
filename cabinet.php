<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="compare.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compare cpu</title>
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
			<h1>practicesite2</h1>
			<a href="login.php" id="login" title="login"><img src="images/login.png"></a>
			<div id="hammenu" hidden>
				<div class="ham">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="hamnavbar">
					<ul class="hamhor">
						<li><a href="index.php">Home</a></li>
						<li><a href="build2.php">Build A PC</a></li>
						<li><div class="hamtop">
							<a>Compare <img src="images/dropdown2.svg" id="im"></a>
							<div class="hamcompare" hidden>
								<ul class="hamcompareul">
									<li><a href="comparecpu.php">CPU</a></li>
									<li><a href="mobo.php">Motherboard</a></li>
									<li><a href="ram.php">RAM</a></li>
									<li><a href="#">Cabinet</a></li>
									<li><a href="psu.php">Powersupply</a></li>
									<li><a href="gpu.php">Graphics Card</a></li>
								</ul>
							</div>
						</div></li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="#">Laptops</a></li>
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
					<li id="selected"><div class="top">
						<a title="compare PC parts">Compare<img src="images/dropdown.png" id="im"></a>
						<div class="compare">
							<ul class="compareul">
								<li><a href="comparecpu.php">CPU</a></li>
								<li><a href="mobo.php">Motherboard</a></li>
								<li><a href="ram.php">RAM</a></li>
								<li><a href="#">Cabinet</a></li>
								<li><a href="psu.php">Powersupply</a></li>
								<li><a href="gpu.php">Graphics Card</a></li>
							</ul>
						</div>
					</div></li>
					<li><a href="forum.php">Forum</a></li>
					<li><a href="#" title="how to">How to's</a></li>
					<li id="more"><div class="top" id="hi">
						<a>More<img src="images/dropdown.png" id="im"></a>
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
			<br>
			<div id="spectable">
				<div id="space"></div>
				<div class="cpuname" id="cpu1">
					<button class="selectcpu">Select a cpu</button>
					<div class="showcpu">
						<input type="text" id="selectacpu" placeholder="Search.." onkeyup="myFunc(this)" size = "5">
						<a class="selectedcpu">Intel i3 8100</a>
						<a class="selectedcpu">AMD Ryzen 2600</a>
						<a class="selectedcpu" value="AMD Ryzen 3 1200">AMD Ryzen 3 1200</a>
						<a class="selectedcpu" value="AMD Ryzen 3 1300X">AMD Ryzen 3 1300X</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1400">AMD Ryzen 5 1400</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1500X">AMD Ryzen 5 1500X</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1600">AMD Ryzen 5 1600</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1600X">AMD Ryzen 5 1600X</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1700">AMD Ryzen 7 1700</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1700X">AMD Ryzen 7 1700X</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1800X">AMD Ryzen 7 1800X</a>
					</div>
				</div>
				<div class="cpuname" id="cpu2">
					<button class="selectcpu">Select a cpu</button>
					<div class="showcpu">
						<input type="text" id="selectacpu" placeholder="Search.." onkeyup="myFunc(this)" size = "5">
						<a class="selectedcpu">Intel i3 8100</a>
						<a class="selectedcpu">AMD Ryzen 2600</a>
						<a class="selectedcpu" value="AMD Ryzen 3 1200">AMD Ryzen 3 1200</a>
						<a class="selectedcpu" value="AMD Ryzen 3 1300X">AMD Ryzen 3 1300X</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1400">AMD Ryzen 5 1400</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1500X">AMD Ryzen 5 1500X</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1600">AMD Ryzen 5 1600</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1600X">AMD Ryzen 5 1600X</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1700">AMD Ryzen 7 1700</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1700X">AMD Ryzen 7 1700X</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1800X">AMD Ryzen 7 1800X</a>
					</div>
				</div>
				<div class="cpuname" id="cpu3">
					<button class="selectcpu">Select a cpu</button>
					<div class="showcpu">
						<input type="text" id="selectacpu" placeholder="Search.." onkeyup="myFunc(this)">
						<a class="selectedcpu">Intel i3 8100</a>
						<a class="selectedcpu">AMD Ryzen 2600</a>
						<a class="selectedcpu" value="AMD Ryzen 3 1200">AMD Ryzen 3 1200</a>
						<a class="selectedcpu" value="AMD Ryzen 3 1300X">AMD Ryzen 3 1300X</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1400">AMD Ryzen 5 1400</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1500X">AMD Ryzen 5 1500X</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1600">AMD Ryzen 5 1600</a>
						<a class="selectedcpu" value="AMD Ryzen 5 1600X">AMD Ryzen 5 1600X</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1700">AMD Ryzen 7 1700</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1700X">AMD Ryzen 7 1700X</a>
						<a class="selectedcpu" value="AMD Ryzen 7 1800X">AMD Ryzen 7 1800X</a>
					</div>
				</div>
				<div class="specs" id="spec1">
					<p>Name</p>
				</div>
				<div class="cpuspec1" id="spec1">
					<p>Name1</p>
				</div>
				<div class="cpuspec2" id="spec1">
					<p>Name2</p>
				</div>
				<div class="cpuspec3" id="spec1">
					<p>Name3</p>
				</div>
				<div class="specs" id="spec2">
					<p>Series</p>
				</div>
				<div class="cpuspec1" id="spec2">
					<p>Series1</p>
				</div>
				<div class="cpuspec2" id="spec2">
					<p>Series2</p>
				</div>
				<div class="cpuspec3" id="spec2">
					<p>Series3</p>
				</div>
				<div class="specs" id="spec3">
					<p>Socket</p>
				</div>
				<div class="cpuspec1" id="spec3">
					<p>Socket1</p>
				</div>
				<div class="cpuspec2" id="spec3">
					<p>Socket2</p>
				</div>
				<div class="cpuspec3" id="spec3">
					<p>Socket3</p>
				</div>
				<div class="specs" id="spec4">
					<p>Cores</p>
				</div>
				<div class="cpuspec1" id="spec4">
					<p>Cores1</p>
				</div>
				<div class="cpuspec2" id="spec4">
					<p>Cores2</p>
				</div>
				<div class="cpuspec3" id="spec4">
					<p>Cores3</p>
				</div>
				<div class="specs" id="spec5">
					<p>Threads</p>
				</div>
				<div class="cpuspec1" id="spec5">
					<p>Threads1</p>
				</div>
				<div class="cpuspec2" id="spec5">
					<p>Threads2</p>
				</div>
				<div class="cpuspec3" id="spec5">
					<p>Thread3</p>
				</div>
				<div class="specs" id="spec6">
					<div id="l1">
						<p class="l">L1 data</p>
						<p class="l">L1 instruction</p>
					</div>
				</div>
				<div class="cpuspec1" id="spec6">
					<div id="l1">
						<p class="l">L1 data1</p>
						<p class="l">L1 instruction1</p>
					</div>
				</div>
				<div class="cpuspec2" id="spec6">
					<div id="l1">
						<p class="l">L1 data2</p>
						<p class="l">L1 instruction2</p>
					</div>
				</div>
				<div class="cpuspec3" id="spec6">
					<div id="l1">
						<p class="l">L1 data3</p>
						<p class="l">L1 instruction3</p>
					</div>
				</div>
				<div class="specs" id="spec7">
					<p>L2</p>
				</div>
				<div class="cpuspec1" id="spec7">
					<p>L21</p>
				</div>
				<div class="cpuspec2" id="spec7">
					<p>L22</p>
				</div>
				<div class="cpuspec3" id="spec7">
					<p>L23</p>
				</div>
				<div class="specs" id="spec8">
					<p>L3</p>
				</div>
				<div class="cpuspec1" id="spec8">
					<p>L31</p>
				</div>
				<div class="cpuspec2" id="spec8">
					<p>L32</p>
				</div>
				<div class="cpuspec3" id="spec8">
					<p>L33</p>
				</div>
				<div class="specs" id="spec9">
					<p>TDP</p>
				</div>
				<div class="cpuspec1" id="spec9">
					<p>TDP1</p>
				</div>
				<div class="cpuspec2" id="spec9">
					<p>TDP2</p>
				</div>
				<div class="cpuspec3" id="spec9">
					<p>TDP3</p>
				</div>
				<div class="specs" id="spec10">
					<p>Datawidth</p>
				</div>
				<div class="cpuspec1" id="spec10">
					<p>Datawidth1</p>
				</div>
				<div class="cpuspec2" id="spec10">
					<p>Datawidth2</p>
				</div>
				<div class="cpuspec3" id="spec10">
					<p>Datawidth3</p>
				</div>
				<div class="specs" id="spec11">
					<p>Fabrication</p>
				</div>
				<div class="cpuspec1" id="spec11">
					<p>Fabrication1</p>
				</div>
				<div class="cpuspec2" id="spec11">
					<p>Fabrication2</p>
				</div>
				<div class="cpuspec3" id="spec11">
					<p>Fabrication3</p>
				</div>
				<div class="specs" id="spec12">
					<p>SMT</p>
				</div>
				<div class="cpuspec1" id="spec12">
					<p>SMT1</p>
				</div>
				<div class="cpuspec2" id="spec12">
					<p>SMT2</p>
				</div>
				<div class="cpuspec3" id="spec12">
					<p>SMT3</p>
				</div>
				<div class="specs" id="spec13">
					<p>Cooler</p>
				</div>
				<div class="cpuspec1" id="spec13">
					<p>Cooler1</p>
				</div>
				<div class="cpuspec2" id="spec13">
					<p>Cooler2</p>
				</div>
				<div class="cpuspec3" id="spec13">
					<p>Cooler3</p>
				</div>
				<div class="specs" id="spec14">
					<p>Memory type</p>
				</div>
				<div class="cpuspec1" id="spec14">
					<p>Memory type1</p>
				</div>
				<div class="cpuspec2" id="spec14">
					<p>Memory type2</p>
				</div>
				<div class="cpuspec3" id="spec14">
					<p>Memory type3</p>
				</div>
				<div class="specs" id="spec15">
					<p>Memory channel</p>
				</div>
				<div class="cpuspec1" id="spec15">
					<p>Memory channel1</p>
				</div>
				<div class="cpuspec2" id="spec15">
					<p>Memory channel2</p>
				</div>
				<div class="cpuspec3" id="spec15">
					<p>Memory channel3</p>
				</div>
				<div class="specs" id="spec16">
					<p>Max Memory</p>
				</div>
				<div class="cpuspec1" id="spec16">
					<p>Max Memory1</p>
				</div>
				<div class="cpuspec2" id="spec16">
					<p>Max Memory2</p>
				</div>
				<div class="cpuspec3" id="spec16">
					<p>Max Memory3</p>
				</div>
				<div class="specs" id="spec17">
					<p>integrated GPU</p>
				</div>
				<div class="cpuspec1" id="spec17">
					<p>integrated GPU1</p>
				</div>
				<div class="cpuspec2" id="spec17">
					<p>integrated GPU2</p>
				</div>
				<div class="cpuspec3" id="spec17">
					<p>integrated GPU3</p>
				</div>
				<div class="specs" id="spec18">
					<p>Max Temperature</p>
				</div>
				<div class="cpuspec1" id="spec18">
					<p>Max Temperature1</p>
				</div>
				<div class="cpuspec2" id="spec18">
					<p>Max Temperature2</p>
				</div>
				<div class="cpuspec3" id="spec18">
					<p>Max Temperature3</p>
				</div>
			</div>
			<button id="ap">+</button>
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
				<li><a href="#"><i class="fab fa-facebook" title="Facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter" title="Twitter">
				</i></a></li>
				<li><a href="#"><i class="fab fa-instagram" title="Instagram">
				</i></a></li>
				<li><a href="#"><i class="fab fa-whatsapp" title="Whatsapp"></i></a></li>
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script src="js/select2.min.js"></script>
	<script type="text/javascript" src="select.js"></script>
	<script type="text/javascript" src="compare.js"></script>
	<script type="text/javascript" src="loader.js"></script>
</body>
</html>
