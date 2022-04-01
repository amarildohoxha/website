xmlHttp = new XMLHttpRequest();
function getResult() {
	var name = document.getElementById("textam").value;	
	var thema = document.getElementById("textthema").value;	
	var per = document.getElementById("desc").value;	
	
	if (thema.length == ''){			
		return;
	}		
	xmlHttp.open("POST", "sk.php", true);				
	xmlHttp.onreadystatechange = function() {setResult();};
	xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");								     
	xmlHttp.send("name="+name+"&thema="+thema+"&per="+per);		
}

function setResult() {
	if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
		var response = xmlHttp.responseText;
		var resp = JSON.parse(response);																										
		if (resp.status == "ERROR"){
			alert("Something goes wrong!");
		}
		else if (resp.status == "OK"){
			alert("A record was entered");											
			document.getElementById("textam").value="";
			document.getElementById("textthema").value="";
			document.getElementById("desc").value="";
		}
	}
}