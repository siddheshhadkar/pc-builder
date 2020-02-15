function myFunc(x){
		var input, filter, ul, li, a, i, div, txtValue;
		input = x;
		filter = input.value.toUpperCase();
		div = x.parentNode;
		a = div.getElementsByTagName('a');
		for(i = 0; i < a.length; i++){
			txtValue = a[i].textContent || a[i].innerText;
			if(txtValue.toUpperCase().indexOf(filter) > -1){
				a[i].style.display = "";
			}
			else{
				a[i].style.display = "none";
			}
		}
	}
