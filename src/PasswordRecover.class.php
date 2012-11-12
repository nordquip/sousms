<?php
/**
 * L Peery
 * 10/30/2012
 */


class PasswordRecovery {
	//constuctor
	public $email, $password;	
	public function __construct($un, $pwd, $ms) 
        {
		$this->email = $un;
		$this->password = $pwd;
                $this->mysqli = new mysqli ('localhost','root','','sousms');
	//
        //connect to the database
        //$mysqli = mysqli_connect('localhost','root','','cs469_test');
            if (mysqli_connect_errno($mysqli)) 
            {
                    die(printf('MySQL Server connection failed: %s', mysqli_connect_error()));
            }
        }   
        //Validates email address
        function checkEmailAddress($email) {
            // validate email address
            $isValid = false;
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === $email) { 
            // email valid 
                $isValid = true;
            }
            return isValid;
        }

	function smtpmailer($to, $from, $from_name, $subject, $body) { 
		global $error;
	
		//These don't belong here


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

        
        function tempPassword($email){


            // see if the email exists in database 
            $succeed = true;
            //$sql = "SELECT COUNT(*) FROM members WHERE user_email = '$email'";
            $result = mysql_query("CALL doesEmailExist(email)")or die('Could not find member: ' . mysql_error());
            if (!$result){
            //if (!mysql_result($result,0,0) > 0) {
            //error('Email Not Found!');
                $succeed = false;
            } else {
                //Generate a RANDOM MD5 Hash for a password
                $randomPassword = md5(uniqid(rand()));

                //Take the first 8 digits and use them as the temp password
                $newPassword = substr($randomPassword, 0, 8);

                // Make a safe query
                //$query = sprintf("UPDATE `members` SET `user_password` = '%s' WHERE `user_email` = '$email'",
                            //mysql_real_escape_string($newPassword));

                mysql_query("insertTempPassword(newPassword)")or die('Could not update members: ' . mysql_error());

		define('GUSER', 'soustockmarketsimulation@gmail.com'); // GMail username
		define('GPWD', '0xC0ff33'); // GMail password

                //Email password

                $subject = "New Password"; 
                $message = "Your temporary password for SOUSMS is as follows:
                ---------------------------- 
                Password: $newPassword
                ---------------------------- 
                Please change this password when you login"; 

                if(!smtpmailer($email, $GUSER, "SOU SMS", $subject, $message)){ 
                   die ("Sending Email Failed, Please Contact Site Admin! (soustockmarketsimulation@gmail.com)"); 
                }else{ 
                      error('New Password Sent!');
                }
            }
            return $succeed;
        }
}








?>
     