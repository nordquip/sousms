<?php
/******************************************************************
* WSRequestManager.class.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: Simple Web Service caller
******************************************************************/

class WSRequestManager {
	private $url;
		
	public function setServiceAddress($serviceId) {
		echo $_SERVER["SERVER_NAME"];
		echo "</br>";
		$serviceroot = (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://" .
			$_SERVER["SERVER_NAME"] . 
			pathinfo(htmlentities($_SERVER['PHP_SELF']), PATHINFO_DIRNAME) .
			"/../service/";
		echo "<br/> \$serviceroot == $serviceroot <br/>";
		echo "WEBTEAM: FIX - path must be to directory where ua.php or te.php" .
			" reside, <br/> depending on which you are calling.<br/>";
		echo "\$serviceId indeed == $serviceId <br/>";

		switch ($serviceId) {
		case "UA":
			$this->url = "${serviceroot}ua.php";
			break;
		default:
			//$this->url = "";
			return false;
		}
		echo "\$this->url == $this->url <br/>";
		return true;
	}
	
	public function getData($post_args) {
		echo "getData: \$post_args == $post_args <br/>";
		echo "getData: \$this->url == $this->url <br/>";
		$results = "";
		if (isset($this->url)) {
/* DEBUG
			echo "getData: starting curl <br/>";
			$this->url =
				"http://localhost/sousmstest/shared/wsdemo/web/../service/ua.php";
			echo "getData: \$this->url == $this->url <br/>";
DEBUG */
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
		}
		return $results;
	}
}
?>

