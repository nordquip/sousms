<?php
/******************************************************************
* trade.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: Example of a page that requires login to access.
******************************************************************/

include("login.include.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
</head>
<body>
<div><strong>You must be logged in to access this page.</strong></div>
<div><em>Your token was: <?php echo getLoginCookie() ?></em></div>
<a href="javascript:alert(document.cookie)">Show Cookie</a>
</body>
</html>


