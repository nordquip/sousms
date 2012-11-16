<?php
/*
ParameterValidator.class.php
By: Jeff Miller, 2012-11-14
Validates parameters and translates them to IDs if needed
*/
class ParameterValidator {
	private $conn, $translatedValue, $msg, $debug;
	
	public function __construct($pdoconn, $debug = false) {
		$this->conn = $pdoconn;
		$this->translatedValue = null;
		$this->msg = "";
		$this->debug = $debug;
	}
	
	public function __destruct() {
		$this->conn = null;
	}
	
	public function getTranslatedValue() {
		return $this->translatedValue;
	}
	
	public function getMessage() {
		return $this->msg;
	}
	
	public function isValid($paramName, &$paramValue) {
		$valid = false;
		switch ($paramName) {
			case "token":
				$valid = $this->checkToken($paramValue);
				break;
			case "symbol":
				$valid = $this->checkSymbol($paramValue);
				break;
			case "shares":
				$valid = $this->checkShares($paramValue);
				break;
			case "limitprice":
				$valid = $this->checkLimitPrice($paramValue);
				break;
			default:
				$this->msg = "Unknown Parameter: $paramName";
		}
		return $valid;
	}
	
	private function checkToken($token) {
		if ($this->debug) {
			$this->translatedValue = 1;
			$this->msg = "Token is valid (debug)";
			return true;
		}
		$this->translatedValue = -1; //UID
		$this->msg = "";
		try {
			if (!isset($token) || !preg_match('/^[a-z0-9]{32}$/', $token)) {
				$this->msg = "Invalid token format";
			} else {
				$cmd = $this->conn->prepare("CALL sp_getUserIdFromToken(?)");
				$cmd->execute(array($token));
				if ($cmd->rowCount() > 0) {
					$cmd->bindColumn(1, $this->translatedValue); //column 1 is UID (-1 if invalid)
					$cmd->bindColumn(2, $this->msg); //column 2 is status message
					$cmd->fetch(PDO::FETCH_BOUND);
				}
			}
		} catch (PDOException $e) {
			$this->msg = "Error: " . $e->getMessage();
		}
		$this->msg .= (strlen($this->msg) > 0 ? "\n" : "") .
			($this->translatedValue != -1 ? "Token is valid" : "Invalid token ($token)");
		return ($this->translatedValue != -1);
	}
	
	private function checkSymbol($symbol) {
		$valid = false;
		$this->translatedValue = -1; //SymID
		$this->msg = "";
		try {
			if (!isset($symbol) || !preg_match("/^[A-Za-z0-9\.]+$/", $symbol)) {
				$this->msg = "Invalid symbol: " . (strlen($symbol) == 0 ? "(empty)" : $symbol);
			} else {
				$symbol = strtoupper($symbol);
				$cmd = $this->conn->prepare("CALL sp_symbolToSymID(?)");
				$cmd->execute(array($symbol));
				if ($cmd->rowCount() == 0) {
					$this->msg = "Symbol \"$symbol\" not found.";
				} else {
					$cmd->bindColumn(1, $this->translatedValue);
					$cmd->fetch(PDO::FETCH_BOUND);
					$this->msg = "Symbol \"$symbol\" found. SymID: " . $this->translatedValue;
					$valid = true;
				}
			}
		} catch (PDOException $e) {
			$this->msg = "Error: " . $e->getMessage();
		}
		return $valid;
	}
	
	private function checkShares(&$shares) {
		$valid = false;
		$this->translatedValue = null; //variable passed in by reference, not translated
		$this->msg = "";
		if (!isset($shares) || !preg_match("/^[0-9]+$/", $shares)) {
			$this->msg = "Invalid number of shares: " . (strlen($shares) == 0 ? "(empty)" : $shares);
		} else {
			$shares = intval($shares, 10);
			$valid = true;
		}
		return $valid;
	}
	
	private function checkLimitPrice(&$limitprice) {
		$valid = false;
		$this->translatedValue = null; //variable passed in by reference, not translated
		$this->msg = "";
		if (!isset($limitprice) || !preg_match('/^([\$])?([0-9,]+)(\.[0-9]{2})?$/', $limitprice)) {
			$this->msg = "Invalid limit price: " . (strlen($limitprice) == 0 ? "(empty)" : $limitprice);
		} else {
			$limitprice = floatval(preg_replace('/[^0-9.]/', '', $limitprice));
			$valid = true;
		}
		return $valid;
	}
}
?>