<?php
/******************************************************************
* trade.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-15
* Description: PHP trade engine web service
******************************************************************/

include("DbConn.class.php");
include("ParameterValidator.class.php");
include("TradeEngineBuy.class.php");
include("TradeEngineSell.class.php");
include("WebServiceMsg.class.php");

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
			$msg = new WebServiceMsg();
			$msg->behavior = $b;
			$msg->success = false;
			$msg->statuscode = 0;
			$msg->statusdesc = array();
			$msg->retval = null;
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
						$msg->statuscode = 1;
					}
					$msg->statusdesc[] = $v->getMessage();
				}
				//does requested behavior require "symbol" param?
				if (in_array("symbol", $behaviors[$b])) {
					if ($v->isValid("symbol", $req->symbol)) {
						$symID = $v->getTranslatedValue();
					} else {
						$msg->statuscode = 2;
					}
					$msg->statusdesc[] = $v->getMessage();
				}
				//does requested behavior require "shares" param?
				if (in_array("shares", $behaviors[$b])) {
					if (!$v->isValid("shares", $req->shares)) {
						$msg->statuscode = 3;
						$msg->statusdesc[] = $v->getMessage();
					}
				}
				//does requested behavior require "limitprice" param?
				if (in_array("limitprice", $behaviors[$b])) {
					if (!$v->isValid("limitprice", $req->limitprice)) {
						$msg->statuscode = 4;
						$msg->statusdesc[] = $v->getMessage();
					}
				}
				//if there were any errors, set behavior to "test" to send back parameter error messages
				if ($msg->statuscode != 0) {
					$b = "test"; 
				}
				$v = null;
				//End validation of parameters
			} catch (Exception $e) {
				$msg->statusdesc[] = "Validation Failure: " . $e->getMessage();
				$b = "test";
				$msg->statusdesc[] = $myConn->getDebug();
			}
			switch ($b) {
			case "test":
				$msg->success = false;
				$msg->statuscode = -100;
				$msg->statusdesc[] = "Symbol: " . $req->symbol;
				$msg->statusdesc[] = "Shares: " . $req->shares;
				$msg->statusdesc[] = "Limit: " . $req->limitprice;
				break;
			case "marketBuy":
				$mb = new TradeEngineBuy();
				$msg->statusdesc[] = $mb->buy($myConn->getConn(), $userID, $symID, $req->shares, null);
				$msg->success = true;
				$mb = null;
				break;
			case "marketSell":
				$ms = new TradeEngineSell();
				$msg->statusdesc[] = $ms->sell($myConn->getConn(), $userID, $symID, $req->shares, null);
				$msg->success = true;
				$ms = null;
				break;
			case "limitOrderBuy":
				$lb = new TradeEngineBuy();
				$msg->statusdesc[] = $lb->buy($myConn->getConn(), $userID, $symID, $req->shares, $req->limitprice);
				$msg->success = true;
				$lb = null;
				break;
			case "limitOrderSell":
				$ls = new TradeEngineSell();
				$msg->statusdesc[] = $ls->sell($myConn->getConn(), $userID, $symID, $req->shares, $req->limitprice);
				$msg->success = true;
				$ls = null;
				break;
			case "cancelOrder":
				$msg->statuscode = 1;
				$msg->statusdesc[] = "Behavior not yet implemented";
				break;
			case "viewOpenOrders":
				$msg->statuscode = 1;
				$msg->statusdesc[] = "Behavior not yet implemented";
				break;
			case "viewOrderHistory":
				$msg->statuscode = 1;
				$msg->statusdesc[] = "Behavior not yet implemented";
				break;
			}
			header("Content-Type: application/json;charset=UTF-8");
			echo json_encode($msg);
			//echo json_encode($msg, JSON_PRETTY_PRINT); // JSON_PRETTY_PRINT only works in PHP 5.4.0+
			$myConn = null;
			exit;
		}
	} catch (Exception $e) {
		header('HTTP/1.1 500 Internal Server Error');
		exit("<h1>HTTP 500 - Internal Server Error</h1>\nError Details: " . htmlentities($e->getMessage()));
	}
}

?>