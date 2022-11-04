function hideit(x){
  var p = document.getElementById(x);
  var pi = document.getElementById(x+"icon");
  var pb = document.getElementById(x+"body");
  if(pb.style.display ==='none') {
	 pb.style.display = 'block';
	 pi.setAttribute("class", "glyphicon glyphicon-chevron-down");
  } else {
	 pb.style.display = 'none';
	 pi.setAttribute("class", "glyphicon glyphicon-chevron-right");
  }
}