<?php
/*
MiscBehaviors.class.php
By: Jeff Miller, 2012-12-06
Implements various web service behaviors
*/
class MiscBehaviors {
	private $conn, $msg, $debug;
	
	public function __construct($pdoconn, $debug = false) {
		$this->conn = $pdoconn;
		$this->msg = array();
		$this->debug = $debug;
	}
	
	public function __destruct() {
		$this->conn = null;
	}
	
	public function getMessage() {
		return $this->msg;
	}
	
	public function getCurrentCash($uid) {
		$currentcash = 0;
		try {
			$cmd = $this->conn->prepare("CALL sp_getCash(?)");
			$cmd->execute(array($uid));
			$cmd->bindColumn(1, $currentcash);
			$cmd->fetch(PDO::FETCH_BOUND);
		} catch (PDOException $e) {
			$this->msg[] = "ERROR retrieving cash balance: " . $e->getMessage();
		}
		return $currentcash;
	}
	
	public function getPortfolio($uid) {
		$portfolio = array();
		$cmd = $this->conn->prepare("SELECT Symbol.SymID, Symbol.symbol, Shares, DateModified FROM Portfolio JOIN Symbol ON Portfolio.symID = Symbol.symID WHERE Portfolio.UserID = ?");
		$cmd->execute(array($uid));
		$recArr = $cmd->fetchAll();
		if (count($recArr) > 0) {
			foreach ($recArr as $rec) {
				$portfolio[] = array(
					"symid" => $rec[0],
					"symbol" => $rec[1],
					"shares" => $rec[2],
					"datemodified" => $rec[3]
				);
			}
		}
		return $portfolio;
	}
	
	public function getStockPrices() {
		$stockArr = array();
		try {
			$stocklistcmd = $this->conn->prepare("SELECT Symbol.symID, Symbol.symbol FROM Symbol ORDER BY Symbol.symbol");
			$stocklistcmd->execute();
			if ($stocklistcmd->rowCount() > 0) {
				$stocklistcmd->bindColumn(1, $symid);
				$stocklistcmd->bindColumn(2, $symbol);
				while ($stocklistcmd->fetch(PDO::FETCH_BOUND)) {
					$symid = intval($symid, 10);
					$price = 0;
					$pricecmd = $this->conn->prepare("CALL sp_getPrice(?)");
					$pricecmd->execute(array($symid));
					$pricecmd->bindColumn(1, $price);
					$pricecmd->fetch(PDO::FETCH_BOUND);
					$stockArr[$symbol] = array("symid" => $symid, "price" => $price);
				}
			}
		} catch (PDOException $e) {
			$this->msg[] = "ERROR: " . $e->getMessage();
		}
		return $stockArr;
	}
	
	public function cancelOrder($uid, $orderID) {
		$success = false;
		$ordercmd = $this->conn->prepare("SELECT OpenOrders.orderID FROM OpenOrders WHERE OpenOrders.userID = ? AND OpenOrders.orderID = ?");
		$ordercmd->execute(array($uid, $orderID));
		if ($ordercmd->rowCount() > 0) {
			$delcmd = $this->conn->prepare("CALL sp_deleteOpenOrder(?)");
			$delcmd->execute(array($orderID));
			$success = true;
		}
		return $success;
	}
	
	public function getOrderHistory($uid) {
		$history = array();
		$cmd = $this->conn->prepare("SELECT historyID, orderID, Symbol.symID, Symbol.symbol, shares, orderType, OrderTypes.description AS typedesc, price, requestTime FROM OpenOrdersHistory JOIN Symbol ON OpenOrdersHistory.symID = Symbol.symID JOIN OrderTypes ON OpenOrdersHistory.orderType = OrderTypes.typeID WHERE OpenOrdersHistory.userID = ? ORDER BY requestTime");
		$cmd->execute(array($uid));
		$recArr = $cmd->fetchAll();
		if (count($recArr) > 0) {
			foreach ($recArr as $rec) {
				$history[] = array(
					"historyid" => $rec[0],
					"orderid" => $rec[1],
					"symid" => $rec[2],
					"symbol" => $rec[3],
					"shares" => $rec[4],
					"ordertype" => $rec[5],
					"typedesc" => $rec[6],
					"limitprice" => $rec[7],
					"requesttime" => $rec[8]
				);
			}
		}
		return $history;
	}
	
	public function getOpenOrders($uid) {
		$openorders = array();
		$cmd = $this->conn->prepare("SELECT OpenOrders.orderID, OpenOrders.symID, Symbol.symbol, OpenOrders.shares, OpenOrders.orderType, OrderTypes.description AS typedesc, OpenOrders.price, OpenOrders.requestTime FROM OpenOrders JOIN Symbol ON OpenOrders.symID = Symbol.symID JOIN OrderTypes ON OpenOrders.orderType = OrderTypes.typeid WHERE OpenOrders.userID = ? ORDER BY orderID");
		$cmd->execute(array($uid));
		$recArr = $cmd->fetchAll();
		if (count($recArr) > 0) {
			foreach ($recArr as $rec) {
				$openorders[] = array(
					"orderid" => $rec[0],
					"symid" => $rec[1],
					"symbol" => $rec[2],
					"shares" => $rec[3],
					"ordertype" => $rec[4],
					"typedesc" => $rec[5],
					"limitprice" => $rec[6],
					"requesttime" => $rec[7]
				);
			}
		}
		return $openorders;
	}
	
	public function getClientInfo($uid) {
		$client = array(
			"lastname" => "",
			"firstname" => "",
			"email" => "",
			"phone" => ""
		);
		try {
			$cmd = $this->conn->prepare("SELECT Fname, Lname, Email, Phone FROM User WHERE UserID = ?");
			$cmd->execute(array($uid));
			$cmd->bindColumn(1, $client["lastname"]);
			$cmd->bindColumn(2, $client["firstname"]);
			$cmd->bindColumn(3, $client["email"]);
			$cmd->bindColumn(4, $client["phone"]);
			$cmd->fetch(PDO::FETCH_BOUND);
		} catch (PDOException $e) {
			$this->msg[] = "ERROR retrieving user data: " . $e->getMessage();
		}
		return $client;
	}
	
	public function getProfileInfo($uid) {
		$info = array(
			"currentcash" => $this->getCurrentCash($uid),
			"holdings" => array(),
			"client" => $this->getClientInfo($uid)
		);
		$allStocks = $this->getStockPrices();
		$portfolio = $this->getPortfolio($uid);
		for ($i = 0, $cnt = count($portfolio); $i < $cnt; $i++) {
			$symbol = $portfolio[$i]["symbol"];
			$shares = $portfolio[$i]["shares"];
			$price = 0;
			if (array_key_exists($symbol, $allStocks)) {
				$price = $allStocks[$symbol]["price"];
			}
			if ($price > 0) {
				$info["holdings"][] = array(
					"symbol" => $symbol,
					"shares" => $shares,
					"value" => $price
				);
			}
		}
		return $info;
	}
}
?>