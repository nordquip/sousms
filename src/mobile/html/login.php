<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>SOUSMS Home</title>
	<script type="text/javascript">
		function Authenticate()
		{		  
			alert("User Authenticated");
		}
	</script>
</head>
<body>
	
	<div id="main">
		<h1><center>Login to SOU SMS<center></h1>
		
		<div id="login" align="center">
			
			<form> <!--action="authenticationhandler.php" method="post"-->
				<span id="user"> Username:</span><input type="text" id="username" value=""/><br />
				<span id="pass"> Password:</span><input type="Password" id="password" value=""/><br />
				<input type="button" id="submit" value="Submit" onclick="Authenticate()"/>
			</form>
		</div><!-- end div login-->
	</div><!-- end div main-->
</body>
</html>