<?php
/******************************************************************
* DbConn.class.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-05
* Description: Create a database connection for use by other classes
******************************************************************/

class DbConn {
	private $conn, $host, $dbname, $un, $pwd;
	
	public function __construct($host = "localhost", $dbname = "sousms", $un = "", $pwd = "") {
		if ($host == "localhost" && strlen($un) == 0 && strlen($pwd) == 0) {
			$config = '/var/git/sousmsConfig.xml'; //use server version if production environment
			if (!file_exists($config)) {
				$config = 'sousmsConfigLocal.xml'; //use local version if development environment
			}
			if (file_exists($config)) {
				$doc = simplexml_load_file($config);
				$dbname = $doc->mysqlDatabase;
				$un = $doc->mysqlUser;
				$pwd = $doc->mysqlPassword;
			}
		}
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
};
?>