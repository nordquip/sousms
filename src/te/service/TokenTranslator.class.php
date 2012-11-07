<?php
/******************************************************************
* TokenTranslator.class.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-04
* Description: Get a user ID from a token if it is valid
******************************************************************/

class TokenTranslator {
	private $uid;
	private $conn;
	
	public $msg;
	
	public function __construct($pdoconn) {
		$this->conn = $pdoconn;
		$this->uid = -1;
		$this->msg = "";
	}
	
	public function __destruct() {
		$this->conn = null;
	}
	
	public function getUserID() {
		return $this->uid;
	}
	
	public function isValidToken($token) {
		$this->uid = -1;
		$this->msg = "";
		try {
			$cmd = $this->conn->prepare("CALL sp_getUserIdFromToken(?)");
			$cmd->execute(array($token));
			if ($cmd->rowCount() > 0) {
				$cmd->bindColumn(1, $this->uid); //column 1 is UID (-1 if invalid)
				$cmd->bindColumn(2, $this->msg); //column 2 is status message
				$cmd->fetch(PDO::FETCH_BOUND);
			}
		} catch (PDOException $e) {
			$this->msg = "Error: " . $e->getMessage();
		}
		$this->msg .= (strlen($this->msg) > 0 ? "\n" : "") .
			($this->uid != -1 ? "Token is valid" : "Invalid token ($token)");
		return ($this->uid != -1);
	}
};
?>