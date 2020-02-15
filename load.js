function loadcpus(){
	if(window.XMLHttpRequest){
		xhttp = new XMLHttpRequest();
	}else{
		xhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xhttp.open("GET", "loadcpu.php" , true);
	xhttp.send();
	xhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status==200){
		var cpuarr=JSON.parse(xhttp.responseText);
			for(i in cpuarr){
				var ar = "<a class='selectedcpu'>"+cpuarr[i]+"</a>";
				$(".selectcpu").each(function(){
					$(this).next().append(ar);
				});
			}
		}
	}
}
loadcpus();
