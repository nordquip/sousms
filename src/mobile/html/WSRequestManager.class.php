<?php


/******************************************************************
* WSRequestManager.class.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: Simple Web Service caller
******************************************************************/

class WSRequestManager {
	private $url, $debuglog;
		
	public function setServiceAddress($serviceId, $serverroot = "") {
		$serviceroot = (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://" .
			$_SERVER["SERVER_NAME"] . 
			"/service/";
		if (isset($serverroot) && strlen($serverroot) > 0) {
			$serviceroot = $serverroot;
		}
		switch ($serviceId) {
		case "UA":
			$this->url = "${serviceroot}ua.php";
			break;
		case "TE":
			$this->url = "${serviceroot}trade.php";
			break;
		default:
			//$this->url = "";
			return false;
		}
		return true;
	}
	
	public function getData($post_args) {
		$results = "";
		$this->debuglog = "";
		if (isset($this->url)) {
			$ch = curl_init();
			// Set the URL to the web service required by the data manager.
			curl_setopt($ch, CURLOPT_URL, $this->url);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_args);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//header("Content-Type: application/json");
			$results = curl_exec($ch);
			curl_close($ch);
			// Do whatever processing is needed to the data that was returned.
			$this->debuglog = "Requested URL:\n{$this->url}\n\nPOST Data:\n$post_args\n\nResults:\n$results";
		}
		return $results;
	}
	
	public function getLastRequestDetails() {
		return $this->debuglog;
	}
}
?>

