<?php
/******************************************************************
* DbConn.class.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-05
* Description: Create a database connection for use by other classes
******************************************************************/

require_once "ConfigManager.class.php";

class DbConn {
	private $conn, $host, $dbname, $un, $pwd, $debug;
	
	public function __construct($host = "localhost", $dbname = "sousms", $un = "", $pwd = "") {
		$this->debug = "";
		if ($host == "localhost" && strlen($un) == 0 && strlen($pwd) == 0) {
			$cfg = new ConfigManager();
			$dbname = $cfg->mysqlDatabase;
			$un = $cfg->mysqlUser;
			$pwd = $cfg->mysqlPassword;
		}
		$this->debug .= "Host: $host, DB: $dbname, UN: $un";
		$this->host = $host;
		$this->dbname = $dbname;
		$this->un = $un;
		$this->pwd = $pwd;
	}
	
	public function __destruct() {
		$this->conn = null;
	}
	
	public function getConn($connType = "PDO") {
		if (!isset($this->conn) || is_null($this->conn)) {
			switch (strtoupper($connType)) {
			case "PDO":
				$this->conn = new PDO($this->getConnStr($connType), $this->un, $this->pwd);
				break;
			case "MYSQLI":
				$this->conn = new mysqli($this->host, $this->un, $this->pwd, $this->dbname);
				break;
			}
		}
		return $this->conn;
	}
	
	public function getConnStr($connType = "PDO") {
		$connStr = "";
		switch (strtoupper($connType)) {
		case "PDO":
			$connStr = "mysql:host={$this->host};dbname={$this->dbname}";
			break;
		}
		return $connStr;
	}
	
	public function getDebug() {
		return $this->debug;
	}
};
?>