xmlHttp = new XMLHttpRequest();
	
function getResult() {
	var am = document.getElementById("textam").value;	
	if (am != '') {			
		document.getElementById("po").innerHTML = "";	
		var url = "sc.php?am=" + am;
    xmlHttp.open("GET", url, true);				
	xmlHttp.onreadystatechange = function() {setResult();};
	xmlHttp.send(null);	
	}
    else{
    var url = "sc.php";
    xmlHttp.open("GET", url, true);				
	xmlHttp.onreadystatechange = function() {setResult();};
	xmlHttp.send(null);		}
}
	
function setResult() {		
	if ((xmlHttp.readyState == 4) && (xmlHttp.status == 200)) {	
		var thema="THEMA:    ";			
      var re = document.getElementById("po");
		var respons = xmlHttp.responseText;		
		var resp = JSON.parse(respons);
		var objectLenght = Object.keys(resp).length;

		for(i = 0; i < objectLenght; i++){	
         re.innerHTML += "<li class=border-bottom pb-3 mt-3 >";				
		
		re.innerHTML += "<h1 class= font-weight-bold mt-0>"+resp[i].user+"</h1>";
      re.innerHTML += "<p class= m-0 post_intro><b>"+thema+"</b>"+resp[i].subject+"</p>";
	  re.innerHTML += "<p class= m-0 post_intro>"+resp[i].Description+"</p>";
	  re.innerHTML += "<span class=meta text-uppercase>"+resp[i].Date+"</span>";
      re.innerHTML += "</li>";		}											 
	}	
}