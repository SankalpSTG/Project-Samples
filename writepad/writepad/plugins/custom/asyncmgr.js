function maininputchanged(){
	var linetext = document.getElementById("linefield").value;
	if(linetext.length >= 60){
		add_to_db(linetext);
		document.getElementById("linefield").value = "";
	}
}
function lineupdated(index){
	var linetext = document.getElementById("lineno-" + index).value;
	updatedb(linetext, index);
}
function add_to_db(linetext){
	if(window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	}else{  
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
			//alert(this.responseText);
			document.getElementById("writepad").innerHTML += this.responseText;
		}
	}
	xmlhttp.open("GET","includes/addtodb.php?string="+linetext,true);
	xmlhttp.send();
}
function updatedb(linetext, id){
	if(window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	}else{  
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
			//None
		}
	}
	xmlhttp.open("GET","includes/updatedb.php?string="+linetext+"&id="+id,true);
	xmlhttp.send();
}