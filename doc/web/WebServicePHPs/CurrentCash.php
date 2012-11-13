<?php
include("WSRequestManager.class.php");
include("login.include.php");
	
class CurrentCash 
{
	public $username, $currentcash;
};

function parseCurrentCash($un, $cc, &$token, &$expires) {
	try {
		$postData = array(
			"behavior" => "getTokenFromCredentials",
			"currentcash" => new CurrentCash()
		);
		$postData["currentcash"]->username = $un;
		$postData["currentcash"]->currentcash = $cc;
		$ws = new WSRequestManager();
		$ws->setServiceAddress("UA");
		$respTxt = $ws->getData("jsondata=" . json_encode($postData));
		//return $respTxt;
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
?>