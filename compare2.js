function positiondivs(){
	$('.showcpu').each(function(){
		p = $(this).prev().position();
		$(this).css('left', p.left);
	});
}

$(document).ready(function(){
	$(".selectcpu").click(function(){
		$(this).next().toggleClass('sho');
	});
	var y = $('.selectcpu').width();
	var p;
	positiondivs();
	$('.showcpu').css("width", y+13);
	var wid = $(window).width();
	$(window).resize(function(){
		positiondivs();
		var y = $('.selectcpu').width();
		$('.showcpu').css("width", y+13);
	});
	$('.compareul li a').hover(function(){
		$(this).toggleClass('hover3');
	});
	$('.top').click(function(){
		$(this).toggleClass('cli');
	});
	$('#login').click(function(){
		$('#loginopt').toggleClass('shown');
	});
	$("#ap").click(function(){
		$(this).text(function(i, v){
			return v === '+' ? '-' : '+';
		});
		$('.cpuspec3').toggleClass('added');
		$('#cpu3').toggleClass('added');
		$("#spectable").toggleClass('threecpu');
		$('.spacediv').toggleClass('thr');
		$('.specdiv').toggleClass('three');
		$('#totalpoints').toggleClass('three');
		var y = $('.selectcpu').width();
		$('.showcpu').css("width", y+13);
		positiondivs();
	});
	$('.selectedcpu').click(function(){
		var v = $(this).text();
		$(this).parent().prev().text(v).val(v);
		$(this).parent().toggleClass('sho');
		$(this).parent().prev().prev().val(v);
		var p = $(this).parent().parent().attr('id');
		var a;
		if(p=="cpu1"){
			a = 1;
		}
		else if(p=="cpu2"){
			a = 2;
		}
		else if(p=="cpu3"){
			a = 3;
		}
		loadFields(v, a);
	});
	function loadFields(v, a){
		if(window.XMLHttpRequest){
			xhttp = new XMLHttpRequest();
		}else{
			xhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xhttp.open("GET", "comp.php?but="+v , true);
		xhttp.send();
		xhttp.onreadystatechange = function(){
			if(this.readyState==4 && this.status==200){
				var arr=JSON.parse(xhttp.responseText);
				for(x in arr){
					document.getElementById(x+a).innerHTML = arr[x];
					xparent = document.getElementById(x+a).parentElement;
					if(xparent.id == "spec4" || xparent.id == "spec5"){
						document.getElementById(x+a).innerHTML=arr[x]+" Ghz";
						if(xparent.id == "spec4"){
							checkcolor($("#bclk1"), $("#bclk2"), $("#bclk3"));
						}
						if(xparent.id == "spec5"){
							checkcolor($("#tclk1"), $("#tclk2"), $("#tclk3"));
						}
					}
					if(xparent.id == "spec6"){
						checkcolor($("#cores1"), $("#cores2"), $("#cores3"));
					}
					if(xparent.id == "spec7"){
						checkcolor($("#threads1"), $("#threads2"), $("#threads3"));
					}
					else if(xparent.id == "spec8" || xparent.id == "spec9" || xparent.id == "spec10" || xparent.id == "spec11"){
						if(arr[x]>=1024){
							arr[x] = arr[x]/1024;
							document.getElementById(x+a).innerHTML=arr[x]+" MB";
						}
						else{
							document.getElementById(x+a).innerHTML=arr[x]+" KB";
						}
						if(xparent.id == "spec8"){
							checkcolor($("#l1instruction1"), $("#l1instruction2"), $("#l1instruction3"));
						}
						if(xparent.id == "spec9"){
							checkcolor($("#l1data1"), $("#l1data2"), $("#l1data3"));
						}
						if(xparent.id == "spec10"){
							checkcolor($("#l21"), $("#l22"), $("#l23"));
						}
						if(xparent.id == "spec11"){
							checkcolor($("#l31"), $("#l32"), $("#l33"));
						}
					}
					else if(xparent.id == "spec12"){
						document.getElementById(x+a).innerHTML=arr[x]+" Watts";
						checkcolor($("#tdp1"), $("#tdp2"), $("#tdp3"));
					}
					else if(xparent.id == "spec13"){
						document.getElementById(x+a).innerHTML=arr[x]+" Bits";
						checkcolor($("#datawidth1"), $("#datawidth2"), $("#datawidth3"));
					}
					if(xparent.id == "spec18"){
						checkcolor($("#memchannel1"), $("#memchannel2"), $("#memchannel3"));
					}
					else if(xparent.id == "spec19"){
						document.getElementById(x+a).innerHTML=arr[x]+" GB";
						checkcolor($("#maxmemory1"), $("#maxmemory2"), $("#maxmemory3"));
					}
					else if(xparent.id == "spec22"){
						document.getElementById(x+a).innerHTML=arr[x]+" °C";
					}
					if(xparent.id == "spec15" || xparent.id == "spec20"){
						if(arr[x] == '0'){
							arr[x] = 'none';
						}
						document.getElementById(x+a).innerHTML=arr[x];
					}
				}
			}
		}
	}
	function checkcolor(a, b, c){
		var c1, c2, c3, t1, t2, t3;
		c1 = a;
		c2 = b;
		c3 = c;
		t1 = c1.text();
		t2 = c2.text();
		t3 = c3.text();
		t1 = parseFloat(t1);
		t2 = parseFloat(t2);
		t3 = parseFloat(t3);
		if(!t3){
			if(t1>t2){
				c1.css('color', 'green');
				c2.css('color', 'red');
			}
			else if(t2>t1){
				c2.css('color', 'green');
				c1.css('color', 'red');
			}
		}
		else{
			if(t1>=t2 && t1>=t3){
				c1.css('color', 'green');
				if(t2>t3){
					c3.css('color', 'red');
					c2.css('color', '#e2c51d');
				}
				else if(t3>t2){
					c2.css('color', 'red');
					c3.css('color', '#e2c51d');
				}
				else if(t2==t3){
					c2.css('color', 'red');
					c3.css('color', 'red');
				}
				if(t1==t2){
					c2.css('color', 'green');
				}
				else if(t1==t3){
					c3.css('color', 'green');
				}
			}
			if(t2>=t1 && t2>=t3){
				c2.css('color', 'green');
				if(t1>t3){
					c3.css('color', 'red');
					c1.css('color', '#e2c51d');
				}
				else if(t3>t1){
					c1.css('color', 'red');
					c3.css('color', '#e2c51d');
				}
				else if(t1==t3){
					c1.css('color', 'red');
					c3.css('color', 'red');
				}
				if(t2==t1){
					c1.css('color', 'green');
				}
				else if(t2==t3){
					c3.css('color', 'green');
				}
			}
			if(t3>=t1 && t3>=t2){
				c3.css('color', 'green');
				if(t1>t2){
					c2.css('color', 'red');
					c1.css('color', '#e2c51d');
				}
				else if(t2>t1){
					c1.css('color', 'red');
					c2.css('color', '#e2c51d');
				}
				else if(t2==t1){
					c2.css('color', 'red');
					c1.css('color', 'red');
				}
				if(t3==t1){
					c1.css('color', 'green');
				}
				else if(t3==t2){
					c2.css('color', 'green');
				}
			}
			if(t1==t2 && t2==t3){
				c1.css('color', 'black');
				c2.css('color', 'black');
				c3.css('color', 'black');
			}
		}
	}
	//Mobile
	$('.hamtop').hover(function(){
		$('.hamcompare').slideDown(100);
	}, function(){
		$('.hamcompare').slideUp(100);
	});
	$('.ham').click(function(){
		$('.ham').toggleClass('cl');
		$('.hamnavbar').toggleClass('close');
		$('.ham span').first().toggleClass('rotate1').next().toggleClass('disapp').next().toggleClass('rotate2');
	});
});
