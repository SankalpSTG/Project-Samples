function getthisline(index){
	var linetext = document.getElementById("lineno-" + index).innerHTML;
	var inputelem = document.createElement("input");
	inputelem.setAttribute("type", "text");
	inputelem.setAttribute("class", "linefields");
	inputelem.setAttribute("id", ("lineno-" + index));
	inputelem.setAttribute("onkeyup", ("lineupdated(" + index + ")"));
	inputelem.setAttribute("onfocusout", ("changetodiv(" + index + ")"));
	inputelem.value = linetext;
	var previousdiv = document.getElementById("lineno-" + index);
	previousdiv.parentNode.insertBefore(inputelem, previousdiv);
	previousdiv.parentNode.removeChild(previousdiv);
	inputelem.focus();
}
function changetodiv(index){
	var linetext = document.getElementById("lineno-" + index).value;
	var divelem = document.createElement("div");
	divelem.setAttribute("type", "text");
	divelem.setAttribute("class", "linesdiv");
	divelem.setAttribute("id", ("lineno-" + index));
	divelem.setAttribute("onclick", ("getthisline(" + index + ")"));
	divelem.innerHTML = linetext;
	var previousdiv = document.getElementById("lineno-" + index);
	previousdiv.parentNode.insertBefore(divelem, previousdiv);
	previousdiv.parentNode.removeChild(previousdiv);
}