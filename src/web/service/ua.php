<?php
/******************************************************************
* ua.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: User Accounts web service example
******************************************************************/

include("Credentials.class.php");
include("DbConn.class.php");
// class that holds the return message
include("WebServiceMsg.class.php");

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
			// initialize variables in the return message
			$msg = new WebServiceMsg();
			$msg->behavior = $req->behavior;
			// assume the worst
			$msg->success = false;
			$msg->statuscode = 1;
			$msg->statusdesc = array();
			$msg->retval = array();
			try {
				// connect to the database -- needed by the classes
				// that implement the behaviors
				$myConn = new DbConn();

			} catch (Exception $e) {
				// add an element to the statusdesc array
				$msg->statusdesc[] = "Validation Failure: " . $e->getMessage();
				// add another element
				$msg->statusdesc[] = $myConn->getDebug();
			}
			switch ($req->behavior) {
			case "getTokenFromCredentials":
				// the constructor for Credentials can do some basic validation
				// (or throw an exception)
				$credentials = new Credentials(
					$req->credentials->username,
					$req->credentials->password
				);
				$token = null;
				$expires = null;
				// the validate() method returns true if valid or false
				// token, expires, and msg->statusdesc are all passed
				// by reference and set inside validate()
				if (! $credentials->validate(
						$myConn->getConn(),
						$token,
						$expires,
						$msg->statusdesc)) { // captures the reason for failure
					$msg->statuscode = 1; // failed
				} else { // success
					// set values in the return message
					$msg->success = true;
					$msg->statuscode = 0;
					$msg->statusdesc = "Login successful";
					// put the token and expires time in the return message
					$msg->retval = array(
						"token" => $token,
						"expires" => $expires);
				}
				break;

			// add one case for each behavior

			}
			header("Content-Type: application/json;charset=UTF-8");
			echo json_encode($msg);  //serialize the message and return it
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
