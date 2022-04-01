xmlHttp = new XMLHttpRequest();
	
function getResult() {
	
    var url = "jsonphpprov.php";
    xmlHttp.open("GET", url, true);				
	xmlHttp.onreadystatechange = function() {setResult();};
	xmlHttp.send(null);		
}
	
function setResult() {		
	if ((xmlHttp.readyState == 4) && (xmlHttp.status == 200)) {				
      var re = document.getElementById("po");
		var response = xmlHttp.responseText;			
		var resp = JSON.parse(response);
		console.log(resp);	
		var objectLenght = Object.keys(resp).length;	
      alert(resp)
		for(i = 0; i < objectLenght; i++){		
         re.innerHTML += "<li class=border-bottom pb-3 mt-3>";				
		re.innerHTML += "<span class=meta text-uppercase>"+resp[i].Date+"</span>";
		re.innerHTML += "<h1 class= font-weight-bold mt-0>"+resp[i].user+"</h1>";
      re.innerHTML += "<p class= m-0 post_intro>"+resp[i].subject+"</p>";
      re.innerHTML += "</li>";		}											 
	}	
}