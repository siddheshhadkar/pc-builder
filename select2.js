function searchpart(){
  var input, filter, div, p, name, price, i, divlist;
  input = document.getElementById('searchbar');
  filter = input.value.toUpperCase();
  div = document.getElementsByClassName("showparts")[0];
  p = div.getElementsByTagName("p");
  for (i = 0; i < p.length; i++) {
  	name = p[i].getElementsByClassName('lpartname')[0];
    price = p[i].getElementsByClassName("partprice")[0];
    if (name.innerHTML.toUpperCase().indexOf(filter) > -1) {
      p[i].style.display = "";
    } else {
      p[i].style.display = "none";
    }
  }
}