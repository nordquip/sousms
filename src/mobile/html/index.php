<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>SOUSMS Home</title>
	<script type="text/javascript">
		function Authenticate()
		{	
			if(document.getElementById('username').value == "admin" && document.getElementById('password').value == "password")
				window.location.replace("140.211.89.15/mobile/html/home.html");
			else
				alert("Illegal Request");
		}
	</script>
</head>
<body>
	
	<div id="main">
		<h1><center>Login to SOU SMS<center></h1>
		
		<div id="login" align="center">
			
			<form autocomplete="on"> <!--action="authenticationhandler.php" method="post"-->
				<span id="user"> Username:</span><input type="text" id="username" value=""/><br />
				<span id="pass"> Password:</span><input type="Password" id="password" value=""/><br />
				<input type="button" id="submit" value="Submit" onclick="Authenticate()"/><!-- Authenticate() will be replaced with the authentication call to the server-->
			</form>
			
		</div><!-- end div login-->

	</div><!-- end div main-->
</body>
</html>