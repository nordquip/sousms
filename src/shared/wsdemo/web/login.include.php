<?php
/******************************************************************
* login.include.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: Utility functions for pages that require login.
*   This code wants to live in a Singleton...
******************************************************************/

/* REMOVE:
// CONST declarations:
// ASSUME the following:
//   login.include.php resides in the 'shared' directory
//   SOUSMSWEBROOT is the directory above the shared directory
//TROUBLE - can't find this from login.include.php.
//Can find it only from index.php, but login.include.php must know it
//before index.php is able to assign it.
//   the 'login' page is named index.php
//   index.php resides in SOUSMSWEBROOT
//   this scenario matches the way the product is built on the server
$loginpage = $_SERVER['SERVER_NAME'] . "/wsdemo/web/index.php"; // DEBUG
*/
$loginpage = "/shared/wsdemo/web/index.php"; // DEBUG
echo "\$loginpage == $loginpage <br/>";
//Must say where the default landing page after you've logged in is:

// ASSUME: index.php is in the root of the webserver.
// in xampp, can edit httpd.conf -- DocumentRoot


function getSecret() {
	//this is the private key that is used to encrypt/decrypt the cookie data
	//it should be stored in a secure location on the server
	//how can this be made more secure?
	//TODO:GetLoginEncryptionKeyFromConfigFile
	//  (the following is for demonstration purposes only)
	return "qwertpoiuy";
}

//store encrypted cookies in user-agent
function setLoginCookie($data, $exptimestamp) {
	//magic
	$cookieData = serialize($data);
	$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
	srand();
	$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	$encryptedData = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, getSecret(), $cookieData, MCRYPT_MODE_CBC, $iv);
	setcookie("usr", base64_encode($encryptedData) . ":" . $iv, $exptimestamp);
}

//get and decrypt encrypted cookies from user-agent
function getLoginCookie() {
	//voodoo
	list($encryptedData, $iv) = explode(":", $_COOKIE["usr"]);
	$rawData = mcrypt_decrypt(
		MCRYPT_RIJNDAEL_256,
		getSecret(),
		base64_decode($encryptedData),
		MCRYPT_MODE_CBC,
		$iv
	);
	return unserialize($rawData);
}

//If logged in, continue. Otherwise, go back to login page.
//ASSUMES the basename of the login page is login.php
$loginPageBasename = "login.php";
echo "login.include.php: (pathinfo(\$_SERVER['PHP_SELF'], PATHINFO_BASENAME) <br/>";
echo pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME) . " <br/>";
echo "login.include.php: (pathinfo(\$_SERVER['PHP_SELF'], PATHINFO_DIRNAME) <br/>";
echo pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME) . " <br/>";

//this script is included by all pages that require login
//if we're sitting on the login page itself,
//  keep us from doing an infinite redirect
//otherwise, redirect to login if the cookie is not valid
//do we need a function that checks the database to see if the token is valid?
//if (pathinfo(htmlentities($_SERVER['PHP_SELF']), PATHINFO_BASENAME) !=
//if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME) !=
echo $_SERVER['PHP_SELF'];
echo " <br/>";
echo "\$loginpage == $loginpage" . " <br/>";
if ($_SERVER['PHP_SELF'] != $loginpage &&
	strlen(getLoginCookie()) != 32) {
	header("Location: ${loginPage}?jumpto=${_SERVER['PHP_SELF']}");
}
?>
