<?php
/******************************************************************
* webServiceCaller.include.php
* Description: Web Services Caller
******************************************************************/

include($_SERVER['DOCUMENT_ROOT'] . "/login.include.php"); //include from root of server
include($_SERVER['DOCUMENT_ROOT'] . "/WSRequestManager.class.php"); //this must execute after login check

global $behaviors;
// All behaviors supported by sousms from both TE and UA departments.
// NOTE: BEHAVIOR 'DECLARATIONS'
// new behaviors you would like to call must be added to this array
$behaviors = array(
	"marketBuy" => "Market Buy",
	"marketSell" => "Market Sell",
	"limitOrderBuy" => "Limit Buy",
	"limitOrderSell" => "Limit Sell",
	"cancelOrder" => "Cancel Order",
	"viewOpenOrders" => "View Open Orders",
	"viewOrderHistory" => "View Order History",
	"currentCash" => "Current Cash"
);
// END of behavior list

// NOTE: DATA ITEM FORMAL PARAMETERS
function callService(&$reqTxt,
	$department,
	$transtype,
	$symbol,
	$shares,
	$limitprice,
	$username,
	$password)
{
	global $behaviors;
	try {
		$reqTxt = "";
		if (!$behaviors[$transtype]) {
			return "Behavior not implemented: $transtype";
		}
		$postData = array(
			"behavior" => $transtype,
			"token" => getLoginCookie(),
			"symbol" => $symbol,
			"shares" => $shares,
			"limitprice" => $limitprice,
			"username" => $username,
			"password" => $password,
			"currentcash" => $currentcash
		);
		$ws = new WSRequestManager();
		$ws->setServiceAddress("$department");
		$respTxt = $ws->getData("jsondata=" . json_encode($postData));
		$reqTxt = $ws->getLastRequestDetails();
		return $respTxt;
	} catch (Exception $e) {
		header('HTTP/1.1 500 Internal Server Error');
		echo "Error: " . $e->getMessage();
		exit;
	}
}

// NOTE: DATA ITEM 'DECLARATIONS'
// new data items needed must be given a variable name 
// and added to this list of variables. The php variable name should
// match the POST name
$resultObj = array();
$resultStr = "";
$debuglog = "";
$department = (isset($_POST["department"]) ? $_POST["department"] : "");
$transtype = (isset($_POST["transtype"]) ? $_POST["transtype"] : "");
$symbol = (isset($_POST["symbol"]) ? $_POST["symbol"] : "");
$shares = (isset($_POST["shares"]) ? $_POST["shares"] : "");
$limitprice = (isset($_POST["limitprice"]) ? $_POST["limitprice"] : "");
$username = (isset($_POST["username"]) ? $_POST["username"] : "");
$password = (isset($_POST["password"]) ? $_POST["password"] : "");
$currentcash = (isset($_POST["currentcash"]) ? $_POST["currentcash"] : "");
// END of variable declaration list

// $transtype holds the name of the behavior you would like to call
// NOTE: DATA ITEM ACTUAL PARAMETERS
// variables for new data items must be added to the end of the list of
// actual parameters passed to callService below
if (strlen($transtype) > 0) {
	$resultStr = callService($debuglog,
		$department,
		$transtype,
		$symbol,
		$shares,
		$limitprice,
		$username,
		$password,
		$currentcash);
// END of parameters passed to callService
	$resultObj = json_decode($resultStr); //null if error
}
?>