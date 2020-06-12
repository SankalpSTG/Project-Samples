var window_width;
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
    document.getElementById("c-sub-head").style.top = "-18px";
  } else {
    document.getElementById("c-sub-head").style.top = "0px";
  }
}
var y_position = window.pageYOffset;
var x_width = screen.width;

function head_scroll(){
	y_position = window.pageYOffset;
	x_width = screen.width;
	var header_element =  document.getElementById("c-header");
	if(y_position >= 1 && window.innerWidth > 991){
		header_element.style.position = 'fixed';
		header_element.style.top = -18 + "px";
		if(window.innerWidth < 991 ){
			document.body.style.paddingTop = 240 + "px";
		}else{
			document.body.style.paddingTop = 150 + "px";
		}
		
	}else{
		document.body.style.paddingTop = 0 + "px";
		header_element.style.top = 0 + "px";
		header_element.style.position = 'relative';
	}
	//window.alert(x_width);
	
}
function myInit(){
	var element = document.getElementById("blank_screen");
    element.parentNode.removeChild(element);
}
function width_check(){
	window_width = window.innerWidth;
		var element = document.getElementById("c-nav");
	if(window_width < 991){
		document.getElementById("c-header").style.height = 240 + 'px';
		element.style.display = 'none';
		document.getElementById("hidden_menu").style.display = "block";
	}else{
		document.getElementById("c-header").style.height = 150 + 'px';
		element.style.display = 'block';
		document.getElementById("hidden_menu").style.display = "none";
	}
}
window.addEventListener('scroll', head_scroll), false;
window.addEventListener("load", myInit, true);