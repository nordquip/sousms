

<?php
/******************************************************************
* login.include.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: Utility functions for pages that require login.
*   This code wants to live in a Singleton...
******************************************************************/

function getSecret() {
	//this is the private key that is used to encrypt/decrypt the cookie data
	//it should be stored in a secure location on the server (for demonstration purposes only)
	//how can this be made more secure?
	return "qwertpoiuy";
}

//store encrypted cookies in user-agent
function setLoginCookie($data, $exptimestamp) {
	//magic
	/*
	$cookieData = serialize($data);
	$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
	srand();
	$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	$encryptedData = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, getSecret(), $cookieData, MCRYPT_MODE_CBC, $iv);
	setcookie("usr", base64_encode($encryptedData) . ":" . $iv, $exptimestamp);
	*/
	setcookie("usr", serialize($data), $exptimestamp);

}

//get and decrypt encrypted cookies from user-agent
function getLoginCookie() {
	//voodoo
	/*
	list($encryptedData, $iv) = explode(":", $_COOKIE["usr"]);
	$rawData = mcrypt_decrypt(
		MCRYPT_RIJNDAEL_256,
		getSecret(),
		base64_decode($encryptedData),
		MCRYPT_MODE_CBC,
		$iv
	);
	return unserialize($rawData);
	*/
	return unserialize($_COOKIE["usr"]);
}

function startsWith($needle, $haystack) {
	return preg_match('/^' . preg_quote($needle, '/') . "/", $haystack);
}

//If logged in, continue. Otherwise, go back to login page.

//here is the location of the login page, it should be stored in a config file somewhere instead of hard-coding it
$loginpage = "/index.php";
if (startsWith("/~millerj3/", $_SERVER['PHP_SELF'])) {
	$loginpage = "/~millerj3/wsdemo/web" . $loginpage;
} else if (startsWith("/~rekowj/", $_SERVER['PHP_SELF'])) {
	$loginpage = "/~rekowj" . $loginpage;
}
//this script is included by all pages that require login
//if we're sitting on the login page itself, don't infinite redirect
//otherwise, redirect to login if the cookie is not valid
//do we need a function that checks the database to see if the token is valid?
if ($_SERVER['PHP_SELF'] != $loginpage && strlen(getLoginCookie()) != 32) {
	header("Location: ${loginpage}?jumpto=${_SERVER['PHP_SELF']}");
}
?>