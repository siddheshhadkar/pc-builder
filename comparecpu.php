<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="compare2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compare cpu</title>
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
			<h1>compare2</h1>
			<a id="login" title="get started here!"><img src="images/login.png" id="loginimg"></a>
			<div id="loginopt">
				<ul class="loginul">
					<li><a href="">View your Profile</a></li>
					<li><a href="">Logout</a></li>
				</ul>
			</div>
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
									<li><a href="#">CPU</a></li>
									<li><a href="comparemobo.php">Motherboard</a></li>
									<li><a href="compareram.php">RAM</a></li>
									<li><a href="comparecabinet.php">Cabinet</a></li>
									<li><a href="comparepsu.php">Powersupply</a></li>
									<li><a href="comparegpu.php">Graphics Card</a></li>
								</ul>
							</div>
						</div></li>
						<li><a href="#">Forum</a></li>
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
					<li id="selected"><div class="top" id="topdiv1">
						<a title="compare PC parts" id="top1">Compare<img src="images/dropdown.png" id="im"></a>
						<div class="compare">
							<ul class="compareul">
								<li><a href="#">CPU</a></li>
								<li><a href="comparemobo.php">Motherboard</a></li>
								<li><a href="compareram.php">RAM</a></li>
								<li><a href="comparecabinet.php">Cabinet</a></li>
								<li><a href="comparepsu.php">Powersupply</a></li>
								<li><a href="comparegpu.php">Graphics Card</a></li>
							</ul>
						</div>
					</div></li>
					<li><a href="forum.php">Forum</a></li>
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
			<p id="pap"><button id="ap">+</button></p>
			<div id="spectable">
				<div class="spacediv">
					<div id="space"></div>
					<div class="cpuname" id="cpu1">
						<input type="hidden" name="but1val" value="<?php if(isset($but1val)) echo $but1val;?>">
						<input type="button" name="but1" id="but1" class="selectcpu" value="<?php if(isset($but1val)) echo $but1val;else echo 'Select a CPU';?>">
						<div class="showcpu" id="showcpu1">
							<input type="text" class="selectacpu" id="1" placeholder="Search.." onkeyup="myFunc(this)">
						</div>
					</div>
					<div class="cpuname" id="cpu2">
						<input type="hidden" name="but2val" value="<?php if(isset($but2val)) echo $but2val;?>">
						<input type="button" name="but2" id="but2" class="selectcpu" value="<?php if(isset($but2val)) echo $but2val;else echo 'Select a CPU';?>">
						<div class="showcpu" id="showcpu2">
							<input type="text" class="selectacpu" id="2" placeholder="Search.." onkeyup="myFunc(this)">
						</div>
					</div>
					<div class="cpuname" id="cpu3">
						<input type="hidden" name="but3val" value="<?php if(isset($but3val)) echo $but3val;?>">
						<input type="button" name="but3" id="but3" class="selectcpu" value="<?php if(isset($but3val)) echo $but3val;else echo 'Select a CPU';?>">
						<div class="showcpu" id="showcpu3">
							<input type="text" class="selectacpu" id="3" placeholder="Search.." onkeyup="myFunc(this)">
						</div>
					</div>
				</div>
				<div class="commonspecs">
          <h2 class="specheader">GENERAL</h2>
          <div class="specdiv">
            <div class="specs" id="spec1">
    					<p>Name</p>
    				</div>
    				<div class="cpuspec1" id="spec1">
    					<p id="name1"></p>
    				</div>
    				<div class="cpuspec2" id="spec1">
    					<p id="name2"></p>
    				</div>
    				<div class="cpuspec3" id="spec1">
    					<p id="name3"></p>
    				</div>
          </div>
  				<div class="specdiv">
            <div class="specs" id="spec2">
    					<p>Series</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit boarda CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec2">
    					<p id="brand1"></p>
    				</div>
    				<div class="cpuspec2" id="spec2">
    					<p id="brand2"></p>
    				</div>
    				<div class="cpuspec3" id="spec2">
    					<p id="brand3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec3">
    					<p>Socket</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec3">
    					<p id="socket1"></p>
    				</div>
    				<div class="cpuspec2" id="spec3">
    					<p id="socket2"></p>
    				</div>
    				<div class="cpuspec3" id="spec3">
    					<p id="socket3"></p>
    				</div>
          </div>
        </div>
				<div class="commonspecs">
          <h2 class="specheader">MORE</h2>
          <div class="specdiv">
            <div class="specs" id="spec4">
    					<p>BCLK</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec4">
    					<p id="bclk1"></p>
    				</div>
    				<div class="cpuspec2" id="spec4">
    					<p id="bclk2"></p>
    				</div>
    				<div class="cpuspec3" id="spec4">
    					<p id="bclk3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec5">
    					<p>TCLK</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec5">
    					<p id="tclk1"></p>
    				</div>
    				<div class="cpuspec2" id="spec5">
    					<p id="tclk2"></p>
    				</div>
    				<div class="cpuspec3" id="spec5">
    					<p id="tclk3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec6">
    					<p>Cores</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec6">
    					<p id="cores1"></p>
    				</div>
    				<div class="cpuspec2" id="spec6">
    					<p id="cores2"></p>
    				</div>
    				<div class="cpuspec3" id="spec6">
    					<p id="cores3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec7">
    					<p>Threads</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec7">
    					<p id="threads1"></p>
    				</div>
    				<div class="cpuspec2" id="spec7">
    					<p id="threads2"></p>
    				</div>
    				<div class="cpuspec3" id="spec7">
    					<p id="threads3"></p>
    				</div>
          </div>
        </div>
				<div class="commonspecs">
          <h2 class="specheader">CACHE</h2>
          <div class="specdiv">
            <div class="specs" id="spec8">
    					<p>l1instruction</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec8">
    					<p id="l1instruction1"></p>
    				</div>
    				<div class="cpuspec2" id="spec8">
    					<p id="l1instruction2"></p>
    				</div>
    				<div class="cpuspec3" id="spec8">
    					<p id="l1instruction3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec9">
    					<p>l1data</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec9">
    					<p id="l1data1"></p>
    				</div>
    				<div class="cpuspec2" id="spec9">
    					<p id="l1data2"></p>
    				</div>
    				<div class="cpuspec3" id="spec9">
    					<p id="l1data3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec10">
    					<p>L2</p>
    				</div>
    				<div class="cpuspec1" id="spec10">
    					<p id="l21"></p>
    				</div>
    				<div class="cpuspec2" id="spec10">
    					<p id="l22"></p>
    				</div>
    				<div class="cpuspec3" id="spec10">
    					<p id="l23"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec11">
    					<p>L3</p>
    				</div>
    				<div class="cpuspec1" id="spec11">
    					<p id="l31"></p>
    				</div>
    				<div class="cpuspec2" id="spec11">
    					<p id="l32"></p>
    				</div>
    				<div class="cpuspec3" id="spec11">
    					<p id="l33"></p>
    				</div>
          </div>
        </div>
				<div class="commonspecs">
          <h2 class="specheader">OTHER</h2>
          <div class="specdiv">
            <div class="specs" id="spec12">
    					<p>TDP</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec12">
    					<p id="tdp1"></p>
    				</div>
    				<div class="cpuspec2" id="spec12">
    					<p id="tdp2"></p>
    				</div>
    				<div class="cpuspec3" id="spec12">
    					<p id="tdp3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec13">
    					<p>Datawidth</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec13">
    					<p id="datawidth1"></p>
    				</div>
    				<div class="cpuspec2" id="spec13">
    					<p id="datawidth2"></p>
    				</div>
    				<div class="cpuspec3" id="spec13">
    					<p id="datawidth3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec14">
    					<p>Fabrication</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec14">
    					<p id="fab1"></p>
    				</div>
    				<div class="cpuspec2" id="spec14">
    					<p id="fab2"></p>
    				</div>
    				<div class="cpuspec3" id="spec14">
    					<p id="fab3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec15">
    					<p>SMT</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec15">
    					<p id="smt1"></p>
    				</div>
    				<div class="cpuspec2" id="spec15">
    					<p id="smt2"></p>
    				</div>
    				<div class="cpuspec3" id="spec15">
    					<p id="smt3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec16">
    					<p>Cooler</p>
    				</div>
    				<div class="cpuspec1" id="spec16">
    					<p id="cooler1"></p>
    				</div>
    				<div class="cpuspec2" id="spec16">
    					<p id="cooler2"></p>
    				</div>
    				<div class="cpuspec3" id="spec16">
    					<p id="cooler3"></p>
    				</div>
          </div>
        </div>
				<div class="commonspecs">
          <h2 class="specheader">MEMORY</h2>
          <div class="specdiv">
            <div class="specs" id="spec17">
    					<p>Memory type</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec17">
    					<p id="memtype1"></p>
    				</div>
    				<div class="cpuspec2" id="spec17">
    					<p id="memtype2"></p>
    				</div>
    				<div class="cpuspec3" id="spec17">
    					<p id="memtype3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec18">
    					<p>Memory channel</p><div class="col">&#10068;<div class="tooltiptext">a CPU socket or CPU slot comprises one or more mechanical components providing mechanical and electrical connections between a microprocessor and a printed circuit board</div></div>
    				</div>
    				<div class="cpuspec1" id="spec18">
    					<p id="memchannel1"></p>
    				</div>
    				<div class="cpuspec2" id="spec18">
    					<p id="memchannel2"></p>
    				</div>
    				<div class="cpuspec3" id="spec18">
    					<p id="memchannel3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec19">
    					<p>Max Memory</p>
    				</div>
    				<div class="cpuspec1" id="spec19">
    					<p id="maxmemory1"></p>
    				</div>
    				<div class="cpuspec2" id="spec19">
    					<p id="maxmemory2"></p>
    				</div>
    				<div class="cpuspec3" id="spec19">
    					<p id="maxmemory3"></p>
    				</div>
          </div>
        </div>
        <div class="commonspecs">
          <h2 class="specheader">OTHER2</h2>
          <div class="specdiv">
            <div class="specs" id="spec20">
    					<p>integrated GPU</p>
    				</div>
    				<div class="cpuspec1" id="spec20">
    					<p id="igpu1"></p>
    				</div>
    				<div class="cpuspec2" id="spec20">
    					<p id="igpu2"></p>
    				</div>
    				<div class="cpuspec3" id="spec20">
    					<p id="igpu3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec21">
    					<p>LPRICE</p>
    				</div>
    				<div class="cpuspec1" id="spec21">
    					<p id="lprice1"></p>
    				</div>
    				<div class="cpuspec2" id="spec21">
    					<p id="lprice2"></p>
    				</div>
    				<div class="cpuspec3" id="spec21">
    					<p id="lprice3"></p>
    				</div>
          </div>
          <div class="specdiv">
            <div class="specs" id="spec22">
    					<p>Max Temperature</p>
    				</div>
    				<div class="cpuspec1" id="spec22">
    					<p id="maxtemp1"></p>
    				</div>
    				<div class="cpuspec2" id="spec22">
    					<p id="maxtemp2"></p>
    				</div>
    				<div class="cpuspec3" id="spec22">
    					<p id="maxtemp3"></p>
    				</div>
          </div>
        </div>
			</div>
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
	<script type="text/javascript" src="load.js"></script>
	<script type="text/javascript" src="select.js"></script>
	<script type="text/javascript" src="compare2.js"></script>
	<script type="text/javascript" src="clickable3.js"></script>
	<script type="text/javascript" src="loader.js"></script>
</body>
</html>
