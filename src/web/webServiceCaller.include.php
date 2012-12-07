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
	"getCurrentCash" => "Get Client Cash",
	"getPortfolio" => "Get Client Portfolio",
	"getStockPrices" => "Get All Stock Prices",
	"getClientInfo" => "Get Client Information",
	"getProfileInfo" => "Get Profile Information",
	"currentCash" => "Current Cash"
);


// END of behavior list

global $stocks;
$stocks = array(

"AAPL" => "AAPL - Apple - NASDAQ ",
"ADBE" => "ADBE  -  Adobe Systems Incorporated  -  NASDAQ ",
"ADSK" => "ADSK  -  Autodesk, Inc.  -  NASDAQ",
"ALU" => "ALU  -  Alcatel / Lucent  -  NYSE",
"AMZN" => "AMZN  -  Amazon  -  NASDAQ ",
"ATVI" => "ATVI  -  Activision Blizzard  -  NASDAQ",
"AXP" => "AXP  -  American Express  -  NYSE",
"CAKE" => "CAKE - The Cheesecake Factory INC  -  NASDAQ",
"CMCSA" => "CMCSA  -  Comcast  -  NASDAQ",
"COKE" => "COKE  -  Coca-Cola  -  NASDAQ",
"CSCO" => "CSCO  -  Cisco  -  NASDAQ",
"DIS" => "DIS  -  Disney  -  NYSE",
"DNKN" => "DNKN  -  Dunkin Donuts  -  NASDAQ",
"EBAY" => "EBAY  -  Ebay  -  NASDAQ",
"ERTS" => "ERTS - Electronic Arts - NASDAQ",
"GE" => "GE  -  General Electric  -  NYSE",
"GOOG" => "GOOG  -  Google  -  NASDAQ",
"GRMN" => "GRMN  -  Garmin  -  NASDAQ",
"HAS" => "HAS  -  Hasbro  -  NASDAQ",
"HSY" => "HSY - Hershey  -  NYSE",
"HOTT" => "HOTT - Hot Topic  -  NASDAQ ",
"INTC" => "INTC  -  Intel Corporation  -  NASDAQ",
"JBLU" => "JBLU- Jetblue Airways Corp.  -  NASDAQ",
"MON" => "MON  -  Monsanto  -  NYSE",
"MSFT" => "MSFT  -  Microsoft  -  NASDAQ",
"NFLX" => "NFLX  -  Netflix  -  NASDAQ",
"NVDA" => "NVDA - NVIDIA Corporation  -  NASDAQ",
"ORCL" => "ORCL  -  Oracle  -  NASDAQ",
"PBG" => "PBG  -  Petrobank Energy and Resources  -  TSE",
"QCOM" => "QCOM  -  Qualcomm  -  NASDAQ",
"RCL" => "RCL  -  Royal Caribbean Cruises  -  NYSE",
"SBUX" => "SBUX  -  Starbucks  -  NASDAQ",
"SIRI" => "SIRI  -  Sirius Satellite  -  NASDAQ",
"SNE" => "SNE  -  Sony Corporation  -  NASDAQ",
"SPLS" => "SPLS  -  Staples  -  NASDAQ",
"TTWO" => "TTWO - Take-Two Interactive Software, Inc.  -  NASDAQ",
"TXN" => "TXN  -  Texas Instruments  -  NASDAQ",
"V" => "V  -  Visa  -  NYSE",
"VOD" => "VOD  -  Vodafone  -  NASDAQ",
"YHOO" => "YHOO  -  Yahoo -  NASDAQ ",
"ZNGA" => "ZNGA  -  Zynga Inc.  -  NASDAQ "

);


// NOTE: DATA ITEM FORMAL PARAMETERS
function callService(&$reqTxt,
	$department,
	$transtype,
	$symbol,
	$shares,
	$limitprice,
	$orderid,
	$username,
	$password,
	$currentcash)
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
			"orderid" => $orderid,
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
$orderid = (isset($_POST["orderid"]) ? $_POST["orderid"] : "");
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
		$orderid,
		$username,
		$password,
		$currentcash);
// END of parameters passed to callService
	$resultObj = json_decode($resultStr); //null if error
}
?>
