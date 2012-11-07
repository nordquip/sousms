<?php
/******************************************************************
* DbConn.class.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-05
* Description: Create a PDO connection for use by other classes
******************************************************************/

class DbConn {
	private $conn;
	
	public function __construct($host = "localhost", $dbname = "sousms", $un = "", $pwd = "") {
		$connStr = "mysql:host=${host};dbname=${dbname}";
		$this->conn = new PDO($connStr, $un, $pwd);
	}
	
	public function __destruct() {
		$this->conn = null;
	}
	
	public function getConn() {
		return $this->conn;
	}
};
?>