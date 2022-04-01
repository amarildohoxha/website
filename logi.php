
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Login screen</title>
	<link rel="stylesheet" href="styl.css">
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="index.js"></script>
</head>

<body>


	<div class="topnav">
        <a class="active" href="styl.html"><img src="logo-01.png"style="width: 240px;"></a>
        <a href="#about">Login</a>
      </div>

	<div class="login-page">
		<div class="form">
		
		
			<form class="login-form" action="login.php" method="post">
				<input type="text" name="username" placeholder="username"/>
				<input type="password" name="password" placeholder="password"/>
				<button type="submit" name="but_submit" id="but_submit" value="Login">login</button>
				<p class="message">Not registered? <a href="#">Create an account</a></p>
			</form>
		</div>
	</div>
	

</body>
</html>