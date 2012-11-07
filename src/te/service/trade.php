<?php
/******************************************************************
* trade.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-04
* Description: PHP trade engine web service
******************************************************************/

include("DbConn.class.php");
include("TokenTranslator.class.php");
//include("MarketBuy.class.php");
//include("MarketSell.class.php");

class TradeEngineMessage {
	public $success, $statuscode, $statusdesc;
};

if (!isset($_POST["jsondata"])) {
	header('HTTP/1.1 404 Not Found');
	exit;
} else {
	try {
		$req = json_decode($_POST["jsondata"]);
		if (!isset($req->behavior)) {
			//these aren't the droids you're looking for...
			header('HTTP/1.1 404 Not Found');
			exit;
		} else {
			$retval = new TradeEngineMessage();
			$retval->success = false;
			$retval->statuscode = 1;
			$retval->statusdesc = "";
			$myConn = new DbConn("localhost", "sousms", "root", "");
			$userID = -1;
			$errMsg = "";
			if (isset($req->token)) {
				$tt = new TokenTranslator($myConn->getConn());
				if ($tt->isValidToken($req->token)) {
					$userID = $tt->getUserID();
					$retval->statusdesc = $tt->msg;
				} else {
					$retval->statuscode = 1;
					$retval->statusdesc = $tt->msg;
				}
			}
			switch ($req->behavior) {
			case "test":
				$retval->success = true;
				$retval->statuscode = 0;
				break;
			case "marketBuy":
				/*
				$mb = new MarketBuy($myConn->getConn());
				$retval->statuscode = $mb->buy($userID, $req->stockSymbol, $req->numShares);
				$retval->statusdesc = $mb->getMessage($retval->statuscode);
				$mb = null;
				*/
				break;
			case "marketSell":
				/*
				$ms = new MarketSell($myConn->getConn());
				$retval->statuscode = $ms->sell($userID, $req->stockSymbol, $req->numShares);
				$retval->statusdesc = $ms->getMessage($retval->statuscode);
				$ms = null;
				*/
				break;
			case "limitOrderBuy":
				break;
			case "limitOrderSell":
				break;
			case "cancelOrder":
				break;
			case "viewOpenOrders":
				break;
			case "viewOrderHistory":
				break;
			default:
				//we don't implement that unknown behavior
				header('HTTP/1.1 400 Bad Request');
				exit;
			}
			header("Content-type: application/json");
			echo json_encode($retval);
			$myConn = null;
			exit;
		}
	} catch (Exception $e) {
		header('HTTP/1.1 500 Internal Server Error');
		echo "Error: " . $e->getMessage();
		exit;
	}
}

?>