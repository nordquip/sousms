<?php
/******************************************************************
* login.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: Log in to the site.
******************************************************************/

date_default_timezone_set("America/Los_Angeles");

include("WSRequestManager.class.php");
include("login.include.php");

class Credentials {
	public $username, $password;
};

/*
 This is the class returned by ua.php (before json_encode):
	class UATokenMessage {
		public $token, $expires, $statuscode, $statusdesc;
	};
 This is the same class in JSON (after json_encode):
	Success:
		{"token": "e984375893478", "expires": "", "statuscode": 0, "statusdesc": ""}
	Bad credentials:
		{"token": null, "expires": null, "statuscode": 1, "statusdesc": ""}
*/

function parseCredentials($un, $pwd, &$token, &$expires) {
	try {
		$postData = array(
			"behavior" => "getTokenFromCredentials",
			"credentials" => new Credentials()
		);
		$postData["credentials"]->username = $un;
		$postData["credentials"]->password = $pwd;
		$ws = new WSRequestManager();
		$ws->setServiceAddress("UA");
		$respTxt = $ws->getData("jsondata=" . json_encode($postData));
		//return $respTxt;

		echo "<br/>parseCredentials: \$respTxt == $respTxt <br/>";
		$respObj = json_decode($respTxt);
		$token = $respObj->token;
		$expires = new DateTime($respObj->expires);
		return $respObj->statusdesc;
	} catch (Exception $e) {
		header('HTTP/1.1 500 Internal Server Error');
		echo "Error: " . $e->getMessage();
		exit;
	}
}

echo "\$jumpto == $jumpto<br/>";
echo htmlentities($_SERVER['PHP_SELF']);
echo "<br/>";

// TODO: $jumpto needs validation...
if (isset($_POST["jumpto"])) {
	$jumpto = $_POST["jumpto"];
} else if(isset($_GET["jumpto"])) {
	$jumpto = $_GET["jumpto"];
} else {
	// ASSUME: home.php is the landing page, and is in same dir as index.php
	$jumpto = "./home.php";
}

$msg = "";
if (isset($_POST["un"]) && isset($_POST["pwd"])) {
	$msg = parseCredentials($_POST["un"], $_POST["pwd"], $token, $expires);
	if (isset($token) && strlen($token) == 32 && isset($expires)) {
		setLoginCookie($token, $expires->getTimestamp());
		header("Location: $jumpto");
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
	method="post" autocomplete="off">
<?php
if (strlen($msg) > 0) {
	$msg = htmlentities($msg);
	echo "<div style=\"text-align: center;\"><strong style=\"color: #F00;\">$msg</strong></div>";
}
?>
<fieldset style="width: 16em; margin: 0 auto;">
<legend>Log In</legend>
<dl>
  <dt>User Name:</dt>
  <dd><input type="text" name="un" value="" /></dd>
  <dt>Password:</dt>
  <dd><input type="password" name="pwd" value="" /></dd>
</dl>
<input type="submit" value="Log In" />
</fieldset>
<input type="hidden" name="jumpto" value="<?php echo htmlentities($jumpto); ?>" />
</form>
</body>
</html>


