<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="build2.css">
	<link rel="stylesheet" type="text/css" href="snackbar.css">
	<link rel="stylesheet" type="text/css" href="nouislider/distribute/nouislider.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BuildPage2</title>
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
					<li id="selected"><a href="#" title="build your own PC">Build A PC</a></li>
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
				<div id="tec" hidden><button>SEE</button></div>
		</div>
		<div class="side" id="side">
			<p id="compatible"><input type="checkbox" name="checkcompatible" id="checkcompatible"><label for="checkcompatible">compatible parts only</label></p>
			<div class="filters" id="cpufilters">
				<h2>CPU FILTERS</h2>
					<p>Frequency : </p>
					<div id="range">
						<div id="freqrange"></div>
						<input type="number" class="freqvalue" id="freqvaluelow"
										title="Lower Range" value="3" step="0.25">
						<input type="number" class="freqvalue" id="freqvaluehigh" title="Upper Range" value="4" step="0.25">
					</div>
					<p>Socket Type : </p>
					<div class="subfilters">
						<input type="checkbox" id="AM4" value="AM4"><label for="AM4">AM4</label><br>
						<input type="checkbox" id="AM3+" value="AM3+"><label for="AM3+">AM3+</label><br>
						<input type="checkbox" id="LGA1151" value="LGA1151"><label for="LGA1151">LGA1151</label>
					</div>
					<p>Brand : </p>
					<div class="subfilters">
						<input type="checkbox" id="AMD" value="AMD"><label for="AMD">AMD</label><br>
						<input type="checkbox" id="INTEL" value="INTEL"><label for="INTEL">INTEL</label><br>
					</div>
					<p>Cores : </p>
					<div id="range">
						<div id="corerange"></div>
						<input type="number" class="corevalue" id="corevaluelow"
										title="Lower Range" value="4" step="1">
						<input type="number" class="corevalue" id="corevaluehigh" title="Upper Range" value="8" step="1">
					</div>
					<p>Threads : </p>
					<div id="range">
						<div id="threadrange"></div>
						<input type="number" class="threadvalue" id="threadvaluelow"
										title="Lower Range" value="8">
						<input type="number" class="threadvalue" id="threadvaluehigh" title="Upper Range" value="12">
					</div>
					<p><input type="checkbox" value="Integrated" id="integratedgpu">Integrated GPU</p>
					<p>PRICE LIMIT : </p>
					<div id="range">
						<div id="pricerange"></div>
						<input type="number" class="pricevalue" id="pricevaluelow"
										title="Lower Range" value="2000" step="100">
						<input type="number" class="pricevalue" id="pricevaluehigh" title="Upper Range" value="30000" step="100">
					</div>
			</div>
			<div class="filters" hidden id="mobofilters" >
				<h2>MOBO FILTERS</h2>
					<p>Socket Type : </p>
					<div class="subfilters">
						<input type="checkbox" id="AM4" value="AM4"><label for="AM4">AM4</label><br>
						<input type="checkbox" id="AM3+" value="AM3+"><label for="AM3+">AM3+</label><br>
						<input type="checkbox" id="LGA1151" value="LGA1151"><label for="LGA1151">LGA1151</label>
					</div>
					<p>Brand : </p>
					<div class="subfilters">
						<input type="checkbox" id="MSI" value="MSI"><label for="MSI">MSI</label><br>
						<input type="checkbox" id="ZOTAC" value="ZOTAC"><label for="ZOTAC">ZOTAC</label><br>
					</div>
					<p>PRICE LIMIT : </p>
					<div id="range">
						<div id="pricemoborange"></div>
						<input type="number" class="pricevalue" id="pricevaluelow"
										title="Lower Range" value="2000" step="100">
						<input type="number" class="pricevalue" id="pricevaluehigh" title="Upper Range" value="30000" step="100">
					</div>
			</div>
			<div class="filters" hidden id="ramfilters" >
				<h2>RAM FILTERS</h2>
					<p>PRICE LIMIT : </p>
					<div id="range">
						<div id="priceramrange"></div>
						<input type="number" class="pricevalue" id="pricevaluelow"
										title="Lower Range" value="2000" step="100">
						<input type="number" class="pricevalue" id="pricevaluehigh" title="Upper Range" value="30000" step="100">
					</div>
			</div>
			<div class="filters" hidden id="storagefilters" >
				<h2>STORAGE FILTERS</h2>
					<p>Brand : </p>
					<div class="subfilters">
						<input type="checkbox" id="SAMSUNG" value="SAMSUNG"><label for="SAMSUNG">SAMSUNG</label><br>
						<input type="checkbox" id="WD" value="WD"><label for="WD">WD</label><br>
					</div>
					<p>PRICE LIMIT : </p>
					<div id="range">
						<div id="pricestoragerange"></div>
						<input type="number" class="pricevalue" id="pricevaluelow"
										title="Lower Range" value="2000" step="100">
						<input type="number" class="pricevalue" id="pricevaluehigh" title="Upper Range" value="30000" step="100">
					</div>
			</div>
			<div class="filters" hidden id="casefilters" >
				<h2>CASE FILTERS</h2>
			</div>
			<div class="filters" hidden id="psufilters" >
				<h2>PSU FILTERS</h2>
			</div>
			<div class="filters" hidden id="gpufilters" >
				<h2>GPU FILTERS</h2>
					<p>Frequency : </p>
					<div id="range">
						<div id="freqgpurange"></div>
						<input type="number" class="freqvalue" id="freqvaluelow"
										title="Lower Range" value="3" step="0.25">
						<input type="number" class="freqvalue" id="freqvaluehigh" title="Upper Range" value="4" step="0.25">
					</div>
					<p>Brand : </p>
					<div class="subfilters">
						<input type="checkbox" id="AMD" value="AMD"><label for="AMD">AMD</label><br>
						<input type="checkbox" id="NVIDIA" value="NVIDIA"><label for="NVIDIA">NVIDIA</label><br>
					</div>
					<p>PRICE LIMIT : </p>
					<div id="range">
						<div id="pricegpurange"></div>
						<input type="number" class="pricevalue" id="pricevaluelow"
										title="Lower Range" value="2000" step="100">
						<input type="number" class="pricevalue" id="pricevaluehigh" title="Upper Range" value="30000" step="100">
					</div>
			</div>
			<br><br><br><br>
			<br><br><br><br><br><br><br><br>
		</div>
		<div class="main" >
      		<div class="stickydiv">
        		<p class="placeholder"><button class="apply" hidden>APPLY FILTERS</button>Select a part...</p><!--
        	--><div class="permalinkdiv">
          	<div class="permalink">
            	<span>Permalink </span><input type="text" value="asddefr" class="permavalue">
            	<button class="copylink"><img src="save.png"></img></button>
          	</div><!--
          --><a><button id="gotocompare">ComparePage</button></a><!--
					--><div class="permaoptions">
            <button class="buildoptions"><img src="save.png"></img></button>
            <button class="buildoptions"><img src="save.png"></img></button>
						<button class="buildoptions"><img src="save.png"></img></button>
          </div>
        </div>
      </div>
			<div class="recommenddiv">

			</div>
			<div id="tabcontainer">
				<div id="maintabs">
					<button class="selectedtab" id="cpu">CPU</button><!--
					--><button id="mobo">Motherboard</button><!--
					--><button id="ram">RAM</button><!--
					--><button id="storage">Storage</button><!--
					--><button id="case">Case</button><!--
					--><button id="psu">PSU</button><!--
					--><button id="gpu">GPU</button><!--
					--><button id="psu">other</button>
				</div>
			</div>
			<div id="cont">
				<input type="text" name="searchbar" id="searchbar" placeholder="Search..." onkeyup="searchpart()" title="type a part's name" list="searchparts">
				<select class="sortselect">
					<option>Latest</option>
					<option>Popular</option>
					<option>Price (Low to High)</option>
					<option>Price (High to Low)</option>
					<option>Name</option>
				</select>
				<span>Sort By :</span>
			</div>
			<div class="showparts" id="showpart">
				<p><span class="lpartname">AMD Ryzen 5 1700</span><span class="partprice">1700</span></p>
				<p><span class="lpartname">AMD Ryzen 5 1600</span><span class="partprice">1600</span></p>
				<p><span class="lpartname">AMD Ryzen 5 1600X</span><span class="partprice">1500</span></p>
				<p><span class="lpartname">INTEL i7 8700K</span><span class="partprice">12000</span></p>
			</div>
			<div id="mainparts">
				<ul class="list sho" id="lcpu">
				</ul>
				<ul class="list" id="lmobo">
				</ul>
				<ul class="list" id="lram">
				</ul>
				<ul class="list" id="lstorage">
				</ul>
				<ul class="list" id="lcase">
				</ul>
				<ul class="list" id="lpsu">
				</ul>
				<ul class="list" id="lgpu">
				</ul>
			</div>
			<div class="overlaydiv">
				<div id="mainselectedparts">
					<div class="closediv">
						<div class="spandiv">
							<span></span>
							<span></span>
						</div>
					</div>
					<p class="selheadings">Selected Parts</p>
					<div class="partcontainer">
					<div class="spart" id="slcpu">
						<img src="images/cancel.png" class="cancelbut">
						<div class="firstp">
							<p class="pname">CPU</p>
						</div>
						<div class="secondp">
							<p class="tdp">TDP</p>
							<p class="pprice">price</p>
							<select class="seller">

							</select>
							<span class="sellerspan">Seller : </span>
						</div>
					</div>
					<div class="spart" id="slmobo">
						<img src="images/cancel.png" class="cancelbut">
						<div class="firstp"><p class="pname">MOBO</p></div>
						<div class="secondp">
							<p class="tdp">TDP</p>
							<p class="pprice">price</p>
							<select class="seller">

							</select>
							<span class="sellerspan">Seller : </span>
						</div>
					</div>
					<div class="spart" id="slgpu">
						<img src="images/cancel.png" class="cancelbut">
						<div class="firstp"><p class="pname">GPU</p></div>
						<div class="secondp">
							<p class="tdp">TDP</p>
							<p class="pprice">price</p>
							<select class="seller">

							</select>
							<span class="sellerspan">Seller : </span>
						</div>
					</div>
					<div class="spart ram" id="slram">
						<p>RAM</p>
						<div class="secondp">
							<p class="ptdp">TDP</p>
							<p class="ppprice">price</p>
						</div>
					</div>
					<div class="spart" id="slstorage">
						<p>STORAGE</p>
						<div class="secondp">
							<p class="ptdp">TDP</p>
							<p class="ppprice">price</p>
						</div>
					</div>
					<div class="spart" id="slcase">
						<img src="images/cancel.png" class="cancelbut">
						<div class="firstp"><p class="pname">Cases</p></div>
						<div class="secondp">
							<p class="tdp">TDP</p>
							<p class="pprice">price</p>
							<select class="seller">

							</select>
							<span class="sellerspan">Seller : </span>
						</div>
					</div>
					<div class="spart" id="slpsu">
						<img src="images/cancel.png" class="cancelbut">
						<div class="firstp"><p class="pname">PSU</p></div>
						<div class="secondp">
							<p class="tdp">TDP</p>
							<p class="pprice">price</p>
							<select class="seller">

							</select>
							<span class="sellerspan">Seller : </span>
						</div>
					</div>
				</div>
					<div class="tot">
						<div class='lefttot'>
							<p class="selheadings">Power Consumption</p>
							<p>Expected : <span class="buildstat">X</span></p>
							<p>Provided by PSU : <span class="buildstat">Y</span></p>
						</div>
						<div class='righttot'>
							<p class="selheadings">Total Price</p>
							<p><span class="buildstat">ZZZZZ</span></p>
						</div>
					</div>
					<button class="visit">Visit the respective sites</button>
				</div>
		</div>
		<div class="pagination">
		</div>
			<div id="total">
				<p>Power Consumption : <span>a</span></p>
				<p>Total price : <span>b</span></p>
			</div>
		</div>
		<div class="right">
			<div class="build">
				<button id="showbuild">Selected parts</button>
			</div>
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
	<script type="text/javascript" src="obj.js"></script>
	<script type="text/javascript" src="nouislider/distribute/nouislider.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript" src="sliders.js"></script>
	<script type="text/javascript" src="build6.js"></script>
	<script type="text/javascript" src="select2.js"></script>
	<script type="text/javascript" src="clickable2.js"></script>
	<script type="text/javascript" src="snackbar.js"></script>
	<script type="text/javascript" src="loader.js"></script>
</body>
</html>
