<?php
/******************************************************************
* Credentials.class.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: Validate a user
******************************************************************/

//this class is not the same as the Credentials class used by the client
//tbe client needs the public properties only for serialization purposes
class Credentials {
	//these should probably be private because you want your setter/constructor to validate
	public $username, $password;
	
	public function __construct($un, $pwd) {
		$this->username = $un;
		$this->password = $pwd;
	}
	
	// notice the & before the $token and $expires, which makes these formal
	// parameters reference variables. When this function assigns the
	// formal parameter the caller's actual parameter is also assigned
	// validate():
		// calls sanitize() to check the data for legal format
		// if illegal input
			// retval = false
		// if username/password combination does not match a database record
			// retval = false
		// else
			// creates a token and assigns it to $token
			// creates an expiration time and assigns it to $expires
			// enters the token and expiration in the login table
			// retval = true;
		// returns retval

	public function validate($conn, &$token, &$expires, &$errorMsg) {
		// initialize retval to false
		$token = null;
		$expires = null;
		$errorMsg = "";
		$retval = false;
		// calls sanitize() to check username and password for legal
		// format -- security team will do this
		// if legal input:
			try 
			{			
				// retrieve userID for username, password combination
				$stmt = $conn->prepare("CALL sp_getUserIdFromCredentials(?,?)");
				$stmt->execute(array($this->username, md5($this->password)));
				// if found a userID
				if($stmt->rowCount() > 0)
				{
					// get userID
					$stmt->bindColumn(1, $userID);
					$stmt->fetch(PDO::FETCH_BOUND);	
					// create a token and assign it to $token
					$token = md5($this->rand_string(100));
					// create an expiration time and assign it to $expires
					//get the current time
					$dtb = new DateTime(null,
						new DateTimeZone("America/Los_Angeles"));
					$dte = new DateTime(null,
						new DateTimeZone("America/Los_Angeles"));
					//expire the token in 10 minutes,
					$dte->modify("+10 minutes");

					// enter the token and expiration in the login table
					$stmt =
						$conn->prepare("CALL sp_enterLoginTokenFor(?,?,?,?)");
					$stmt->execute(array(
						$userID,
						$token,
						$dtb->format("Y-m-d H:i:s"),
						$dte->format("Y-m-d H:i:s")));
					// get return message
					if($stmt->rowCount() > 0) {
						$stmt->bindColumn(1, $statusMsg);
						$stmt->fetch(PDO::FETCH_BOUND);	
						$errorMsg .= $statusMsg;
					}
					$expires = $dte->format(DateTime::RFC822);
					$retval = true;
				}
				else
				{
					$errorMsg .= "Invalid username or password.";
				}
			}		
			catch (PDOException $e) 
			{
				$errorMsg .= "Error: " . $e->getMessage();
			}
		// end if legal input

		return $retval;
	}
	
	private function rand_string($length) {
		$str = "";
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$size = strlen($chars);
		for($i = 0; $i < $length; $i++) {
			$str .= $chars[rand(0, $size - 1)];
		}
		return $str;
	}
};
?>
