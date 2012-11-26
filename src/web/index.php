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

// Format of the response message is shown in service/WebServiceMsg.class.php
// the retval field of the response is expected to be an array
// containing 2 fields:
	// token
	// expires


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
		// getData() calls the web service
		$respTxt = $ws->getData("jsondata=" . json_encode($postData));
		//return $respTxt;
		$respObj = json_decode($respTxt);
		// if successful
		if ($respObj->success) {
			$token = $respObj->retval->token;
			$expires = new DateTime($respObj->retval->expires);
		}
		return $respObj->statusdesc;
	} catch (Exception $e) {
		header('HTTP/1.1 500 Internal Server Error');
		echo "Error: " . $e->getMessage();
		exit;
	}
}

// TODO: $jumpto needs validation...
if (isset($_POST["jumpto"])) {
	$jumpto = $_POST["jumpto"];
} else if(isset($_GET["jumpto"])) {
	$jumpto = $_GET["jumpto"];
} else {
	// ASSUME: home.php is the landing page and in the same dir as index.php
	$jumpto = "./home.php";
}

$msg = "";
if (isset($_POST["un"]) && isset($_POST["pwd"])) {
	// check the credentials the user entered
	$msg = parseCredentials($_POST["un"], $_POST["pwd"], $token, $expires);
	if (isset($token) && strlen($token) == 32 && isset($expires)) {
		setLoginCookie($token, $expires->getTimestamp());
		header("Location: $jumpto");
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<title>Please Login to N2</title>
<META NAME="ROBOTS" CONTENT="NONE, NOARCHIVE">
<META NAME="GOOGLEBOT" CONTENT="NOARCHIVE">
<meta http-equiv="Expires" content="Tue, 04 Dec 1997 21:29:02 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<link rel="stylesheet" type="text/css" href="2leveltab.css" />
<script type="text/javascript" src="2leveltab.js"></script>
<style type="text/css">
@import "gallery.css";
</style>





</head>

<body>

<p class="auto-style1">
<center>
<img alt="NASDAQ Ninja" height="160" src="images/banner.jpg" width="810" /></p>
</center>
<hr />

<center>
	<div class="auto-style1">

<form action="<?php  

echo htmlentities($loginpage);
?>"
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
<input type="hidden" name="jumpto" value="<?php  echo htmlentities($jumpto); ?>" />
</form>


<br /><p>
		<strong>The above fields are entered by the user and checked against the 
		database. If valid, user is admitted to the home page. If invalid, User 
		is asked to reinput informaiton.</strong><br />
		<br />
		<a href="ForgottenPassword.php">Forgotten Password?</a><br />
		<br />
		<br /></p>
		<br />
		<br />
		<img alt="Ninja" height="358" src="images/ninja.png" width="303" /><br />
		<br />
		<br />
		<br />
		<br />
		<br /><p>
		<a href="mailto:placeholder@email.com?subject=Login Issues">Contact 
		Administrator</a><br />
		Contacts the Administrator of Database(?). Needs valid E-mail
        <br /></p></div>
</center>
<div id="footer">
	<p> &copy; 2012 Southern Oregon University 1250 Siskiyou Boulevard Ashland, OR 97520 541-552-7672</p>
    <p> Webpages may include live content from third parties.</p>
    <p> Allergy Information:  Transmitted on a network that also transmits pictures of tree nuts.</p>
    <p> </p>
</div>
<!-- end #footer -->
</center>
</script>
</body>

</html>
