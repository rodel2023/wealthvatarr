$(document).ready(
	function(){
  $("#tab1-next").click(function(){
	 $("#tab2-button").click();
  });
  
  $("#tab2-next").click(function(){
	 $("#tab3-button").click();
  });

  $("#tab3-next").click(function(){
	 $("#tab1-button").click();
  });
});

var header = document.getElementById("nav-tab");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("nav-button-active");
  current[0].className = current[0].className.replace("nav-button-active", "");
  this.className += " nav-button-active";
  });
}

