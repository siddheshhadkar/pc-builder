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
	var parts = document.getElementById('parts');
	var side = document.getElementById('side');
	if(event.target.id != parts.id){
		side.classList.remove('act');
	}
}
