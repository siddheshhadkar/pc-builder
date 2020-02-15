function checkclick(event){
	var top1 = document.getElementById('top1');
	var topdiv1 = document.getElementById('topdiv1');
	if(event.target.id != top1.id){
		topdiv1.classList.remove('cli');
	}
	var top2 = document.getElementById('top2');
	var topdiv2 = document.getElementById('topdiv2');
	if(event.target.id != top2.id){
		topdiv2.classList.remove('cli');
	}
	var loginimg = document.getElementById('loginimg');
	var loginopt = document.getElementById('loginopt');
	if(event.target.id != loginimg.id){
		loginopt.classList.remove('shown');
	}
	var i;
	for(i=1;i<=3;i++){
		var but = document.getElementById('but'+i);
		var showcpu = document.getElementById('showcpu'+i);
		var nu = document.getElementById(""+i);
		if(event.target.id != but.id){
			if(event.target.id != nu.id){
				showcpu.classList.remove('sho');
			}
		}
	}
}