<?php
/******************************************************************
* ua.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: User Accounts web service example
******************************************************************/

include("Credentials.class.php");
include("PasswordRecover.class.php");

//this is the object format that the client expects from getTokenFromCredentials
//what else might the client want to know?
class UATokenMessage {
	public $token, $expires, $statuscode, $statusdesc;
};

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
			switch ($req->behavior) {
			case "getTokenFromCredentials":
				$msg = new UATokenMessage();
				// the constructor for Credentials can do some basic validation (or throw an exception)
				$credentials = new Credentials(
					$req->credentials->username,
					$req->credentials->password
				);
				// the validate() method returns true if valid or false if invalid
				if ($credentials->validate($token)) {
					// the $token parameter was passed by reference and set inside validate()
					$msg->token = $token;
					//get the current time
					$dt = new DateTime(null, new DateTimeZone("America/Los_Angeles"));
					//expire the token in 10 seconds, this should probably reside inside validate
					$dt->modify("+10 seconds");
					$msg->expires = $dt->format(DateTime::RFC822);
					//just some helpful status information for the caller
					$msg->statuscode = 0;
					$msg->statusdesc = "Login successful";
				} else {
					//bad credentials
					$msg->statuscode = 1;
					$msg->statusdesc = "Invalid user name or password";
				}
				header("Content-type: application/json");
				echo json_encode($msg);  //serialize the UATokenMessage
				break;
                        case "getTokenFromPasswordRecovery":
                                $msg = new UATokenMessage();
                                $password = new PasswordRecovery(
                                        $req->password->email,
                                        $req->password->password
                                );
                                if($password ->checkEmailAddress($email)){
                                    if (tempPassword($email)){
                                    $msg->statuscode = 0;
                                    $msg->statusdesc = "New password sent!";
                                    }
                                } else{
                                    //bad credentials
                                    $msg->statuscode = 1;
                                    $msg->statusdesc = "Invalid email address";
                                }
                                break;
			default:
				//we don't implement that unknown behavior
				header('HTTP/1.1 400 Bad Request');
				exit;
			}
		}
	} catch (Exception $e) {
		header('HTTP/1.1 500 Internal Server Error');
		echo "Error: " . $e->getMessage();
		exit;
	}
}

?>