<?php
include "config.php";

$variablephp = $_SESSION['uname'];
// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: logi.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<script src="sk.js"></script>
    <title>FORMA EISAGOGHS</title>
	<link rel="stylesheet" href="styl.css">
</head>



<body>     
    
	<div class="topnav">
        <a class="active" href="styl.html"><img src="logo-01.png"style="width: 240px;"></a>
        <a href="#about">Login</a>
      </div>


<div style ="border: 1px solid black; border-radius: 6px; padding:25px;margin-top:20px; ">			     
	ΟΝΟΜΑ: <input id=textam type='text' name='onoma'><br/><br/>
	ΘΕΜΑ: <input id=textthema type='text' name='thema'><br/><br/>
	 ΠΕΡΙΓΡΑΦΗ:<br/><br/><textarea id="desc" rows="4" cols="50" name="comment" form="usrform">
		</textarea><br/><br/>
	
	<input type="button" value="register" onclick="getResult();">								 
</div>				 			 
 
     

</body>

</html>