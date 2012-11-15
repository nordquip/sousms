<!DOCTYPE html PUBLIC "-//W3C//DTD HTML5 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>SOUSMS Home</title>
	<script type="text/css" src="css/style.css"></script>
	<script type="text/css">
	div.login{
		max-height:200px;
		max-width:450px;
		min-height:110px;
		min-width:300px;
	}
	</script>
	<script type="text/javascript">
		function Authenticate()
		{	
			if(document.getElementById('username').value == "admin" && document.getElementById('password').value == "password")
				window.location.replace("home.html");
			else
				alert("Illegal Request");
		}
	</script>
</head>
<body>
	
	<div class="main">
		<h1><center>Login to SOU SMS</center></h1>
		
		<div class="login">
			
			<form autocomplete="on"> <!--action="authenticationhandler.php" method="post"-->
				<span id="user"> Username:</span><br /><input type="text" id="username" value=""/><br />
				<span id="pass"> Password:</span><br /><input type="Password" id="password" value=""/><br />
				<input type="button" id="submit" value="Submit" onclick="Authenticate()"/><!-- Authenticate() will be replaced with the authentication call to the server-->
			</form>
			
		</div><!-- end div login-->

	</div><!-- end div main-->
</body>
</html>