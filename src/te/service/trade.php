<?php
/******************************************************************
* trade.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-04
* Description: PHP trade engine web service
******************************************************************/

include("DbConn.class.php");
include("TokenTranslator.class.php");
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
	exit;
} else {
	try {
		$req = json_decode($_POST["jsondata"]);
		if (!isset($req->behavior)) {
			//these aren't the droids you're looking for...
			header('HTTP/1.1 404 Not Found');
			exit;
		} else if (!$behaviors[$req->behavior]) {
			//we don't implement that unknown behavior
			header('HTTP/1.1 400 Bad Request');
			exit;
		} else {
			$b = $req->behavior;
			$retval = new TradeEngineMessage();
			$retval->behavior = $b;
			$retval->success = false;
			$retval->statuscode = 0;
			$retval->statusdesc = array();
			if (in_array("symbol", $behaviors[$b])) {
				if (!isset($req->symbol) || !preg_match("/^[A-Za-z0-9\.]+$/", $req->symbol)) {
					$retval->statuscode = 1;
					if (strlen($req->symbol) == 0) {
						$req->symbol = "(empty)";
					}
					$retval->statusdesc[] = "Invalid symbol: " . $req->symbol;
				}
			}
			if (in_array("shares", $behaviors[$b])) {
				if (!isset($req->shares) || !preg_match("/^[0-9]+$/", $req->shares)) {
					$retval->statuscode = 1;
					if (strlen($req->shares) == 0) {
						$req->shares = "(empty)";
					}
					$retval->statusdesc[] = "Invalid number of shares: " . $req->shares;
				} else {
					$req->shares = intval($req->shares, 10);
				}
			}
			if (in_array("limitprice", $behaviors[$b])) {
				if (!isset($req->limitprice) || !preg_match('/^([\$])?([0-9,]+)(\.[0-9]{2})?$/', $req->limitprice)) {
					$retval->statuscode = 1;
					if (strlen($req->limitprice) == 0) {
						$req->limitprice = "(empty)";
					}
					$retval->statusdesc[] = "Invalid limit price: " . $req->limitprice;
				} else {
					$req->limitprice = floatval(preg_replace('/[0-9.]/', '', $req->limitprice));
				}
			}
			if ($retval->statuscode != 0) {
				header("Content-type: application/json");
				echo json_encode($retval, JSON_PRETTY_PRINT);
				exit;
			}
			//$myConn = new DbConn("localhost", "sousms", "root", "");
			try {
				$myConn = new DbConn(); //should now pull database info from config...
				$userID = -1;
				if (in_array("token", $behaviors[$b])) {
					if (isset($req->token)) {
						$tt = new TokenTranslator($myConn->getConn());
						if ($tt->isValidToken($req->token)) {
							$userID = $tt->getUserID();
							$retval->statuscode = 0;
							$retval->statusdesc[] = $tt->msg;
						} else {
							$retval->statuscode = 1;
							$retval->statusdesc[] = $tt->msg;
						}
					}
				}
			} catch (Exception $e) {
				$retval->statusdesc[] = "Token Translator Failure";
				$retval->statusdesc[] = "Behavior: $b";
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
				$mb = new MarketBuy($myConn->getConn());
				$retval->statuscode = $mb->buy($userID, $req->stockSymbol, $req->numShares);
				$retval->statusdesc[] = $mb->getMessage($retval->statuscode);
				$mb = null;
				*/
				break;
			case "marketSell":
				$ms = new MarketSell();
				$retval->statusdesc[] = $ms->sell($myConn->getConn(), $userID, $req->stockSymbol, $req->numShares);
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
			header("Content-type: application/json");
			echo json_encode($retval, JSON_PRETTY_PRINT);
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