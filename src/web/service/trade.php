<?php
/******************************************************************
* trade.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-15
* Description: PHP trade engine web service
******************************************************************/

include("DbConn.class.php");
include("ParameterValidator.class.php");
//include("MarketBuy.class.php");
include("MarketSell.class.php");

class TradeEngineMessage {
	public $behavior, $success, $statuscode, $statusdesc;
};

//this list contains the parameters that are expected by each behavior
$behaviors = array(
	"test" => array("token"),
	"marketBuy" => array("token", "symbol", "shares"),
	"marketSell" => array("token", "symbol", "shares"),
	"limitOrderBuy" => array("token", "symbol", "shares", "limitprice"),
	"limitOrderSell" => array("token", "symbol", "shares", "limitprice"),
	"cancelOrder" => array("token", "symbol"),
	"viewOpenOrders" => array("token"),
	"viewOrderHistory" => array("token")
);

if (!isset($_POST["jsondata"])) {
	header('HTTP/1.1 404 Not Found');
	exit("<h1>HTTP Error 404 - Not Found</h1>\nThe page that you have requested could not be found.");
} else {
	try {
		$req = json_decode($_POST["jsondata"]);
		if (!isset($req->behavior)) {
			//these aren't the droids you're looking for...
			header('HTTP/1.1 404 Not Found');
			exit("<h1>HTTP Error 404 - Not Found</h1>\nThe page that you have requested could not be found.");
		} else if (!$behaviors[$req->behavior]) {
			//we don't implement that unknown behavior
			header('HTTP/1.1 400 Bad Request');
			exit("<h1>HTTP Error 400 - Bad Request</h1>\nUnknown behavior: &quot;" . htmlentities($req->behavior) . "&quot;.");
		} else {
			$b = $req->behavior;
			$retval = new TradeEngineMessage();
			$retval->behavior = $b;
			$retval->success = false;
			$retval->statuscode = 0;
			$retval->statusdesc = array();
			$userID = -1;
			try {
				//Begin validation of parameters
				$myConn = new DbConn(); //should now pull database info from config...
				//$v = new ParameterValidator($myConn->getConn()); //uncomment for production server
				$v = new ParameterValidator($myConn->getConn(), true); //uncomment for development
				//does requested behavior require "token" param?
				if (in_array("token", $behaviors[$b])) {
					if ($v->isValid("token", $req->token)) {
						$userID = $v->getTranslatedValue();
					} else {
						$retval->statuscode = 1;
					}
					$retval->statusdesc[] = $v->getMessage();
				}
				//does requested behavior require "symbol" param?
				if (in_array("symbol", $behaviors[$b])) {
					if ($v->isValid("symbol", $req->symbol)) {
						$symID = $v->getTranslatedValue();
					} else {
						$retval->statuscode = 2;
					}
					$retval->statusdesc[] = $v->getMessage();
				}
				//does requested behavior require "shares" param?
				if (in_array("shares", $behaviors[$b])) {
					if (!$v->isValid("shares", $req->shares)) {
						$retval->statuscode = 3;
						$retval->statusdesc[] = $v->getMessage();
					}
				}
				//does requested behavior require "limitprice" param?
				if (in_array("limitprice", $behaviors[$b])) {
					if (!$v->isValid("limitprice", $req->limitprice)) {
						$retval->statuscode = 4;
						$retval->statusdesc[] = $v->getMessage();
					}
				}
				//if there were any errors, set behavior to "test" to send back parameter error messages
				if ($retval->statuscode != 0) {
					$b = "test"; 
				}
				$v = null;
				//End validation of parameters
			} catch (Exception $e) {
				$retval->statusdesc[] = "Validation Failure: " . $e->getMessage();
				$b = "test";
				$retval->statusdesc[] = $myConn->getDebug();
			}
			switch ($b) {
			case "test":
				$retval->success = false;
				$retval->statuscode = -100;
				$retval->statusdesc[] = "Symbol: " . $req->symbol;
				$retval->statusdesc[] = "Shares: " . $req->shares;
				$retval->statusdesc[] = "Limit: " . $req->limitprice;
				break;
			case "marketBuy":
				/*
				$mb = new MarketBuy();
				$retval->statuscode = $mb->buy($myConn->getConn(), $userID, $symID, $req->shares);
				$retval->success = true;
				$mb = null;
				*/
				break;
			case "marketSell":
				$ms = new MarketSell();
				$retval->statusdesc[] = $ms->sell($myConn->getConn(), $userID, $symID, $req->shares);
				$retval->success = true;
				$ms = null;
				break;
			case "limitOrderBuy":
				$retval->statuscode = 1;
				$retval->statusdesc[] = "Behavior not yet implemented";
				break;
			case "limitOrderSell":
				$retval->statuscode = 1;
				$retval->statusdesc[] = "Behavior not yet implemented";
				break;
			case "cancelOrder":
				$retval->statuscode = 1;
				$retval->statusdesc[] = "Behavior not yet implemented";
				break;
			case "viewOpenOrders":
				$retval->statuscode = 1;
				$retval->statusdesc[] = "Behavior not yet implemented";
				break;
			case "viewOrderHistory":
				$retval->statuscode = 1;
				$retval->statusdesc[] = "Behavior not yet implemented";
				break;
			}
			header("Content-Type: application/json;charset=UTF-8");
			echo json_encode($retval);
			//echo json_encode($retval, JSON_PRETTY_PRINT); // JSON_PRETTY_PRINT only works in PHP 5.4.0+
			$myConn = null;
			exit;
		}
	} catch (Exception $e) {
		header('HTTP/1.1 500 Internal Server Error');
		exit("<h1>HTTP 500 - Internal Server Error</h1>\nError Details: " . htmlentities($e->getMessage()));
	}
}

?>