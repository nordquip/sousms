<?php
/**
 * L Peery
 * 10/30/2012
 * email function by Carlton Robinson
 */
require_once('phpmailer/class.phpmailer.php');  //additional class to make sending mail work

class PasswordRecovery {
	//constuctor
	public $email, $password;	
	public function __construct($un, $pwd, $ms) 
        {
		$this->email = $un;
		$this->password = $pwd;
        }   
        function smtpmailer($to, $from, $from_name, $subject, $body) { 
		global $error;	
		$mail = new PHPMailer();  // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true;  // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465; 
		$mail->Username = GUSER;  
		$mail->Password = GPWD;           
		$mail->SetFrom($from, $from_name);
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->AddAddress($to);
		if(!$mail->Send()) {
			$error = 'Mail error: '.$mail->ErrorInfo; 
			return false;
		} else {
			$error = 'Message sent!';
			return true;
		}
	}

        
        function tempPassword($conn, $email, &$errorMsg){
            $errorMsg = "";
            try
            {
                //Generate a RANDOM MD5 Hash for a password
                $randomPassword = md5(uniqid(rand()));
                //Take the first 8 digits and use them as the temp password
                $newPassword = substr($randomPassword, 0, 8);
                //retrieve User info from DB
                $bd = $conn->prepare("CALL sp_getUserIdFromCredentials(?,?)");
                $bd->execute(array($this->username, $this->password));
                if($db->rowCount() > 0)
                {   
                    $bd->bindColumn(1,$userID);
                    $bd->fetch(PDO::FETCH_BOUND);
                    //insert new password into DB
                    $bd = $conn->prepare("CALL insertTempPassword(?,?)");
                    $db->execute(array($email, $newPassword));
                    //get return message
                    if ($db->rowCount() > 0)
                    {
                        $bd->bindColumn(1, $statusMsg);
                        $bd->fetch(PDO::FETCH_BOUND);	
                        $errorMsg .= $statusMsg;
                    }
                    $success = true;
                } else {
                    $errorMsg .= "Invalid username or password.";
                }
                if ($success == true)
                {
                    define('GUSER', 'soustockmarketsimulation@gmail.com'); // GMail username
                    define('GPWD', '0xC0ff33'); // GMail password
                    //Email password
                    $subject = "New Password"; 
                    $message = "Your temporary password for SOUSMS is as follows:
                    ---------------------------- 
                    Password: $newPassword
                    ---------------------------- 
                    Please change this password when you login";
                    if(!smtpmailer($email, GUSER, "SOU SMS", $subject, $message)){                         
                       $errorMsg = ("Sending Email Failed, Please Contact Site Admin! (soustockmarketsimulation@gmail.com)");
                       die ($errorMsg);
                    }else{ 
                          $errorMsg = ('New Password Sent!');
                    }
                }
            }	
            catch (PDOException $e)
            {
            $errorMsg .= "Error: " . $e->getMessage();
            }
            
            return $success;
        }
}
?>
     