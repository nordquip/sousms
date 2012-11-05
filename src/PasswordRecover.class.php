<?php
/**
 * L Peery
 * 10/30/2012
 */

//Connect to the MySQL Database
include '../connect.php';

class PasswordRecovery {
	//constuctor
	public $email, $password;	
	public function __construct($un, $pwd) {
		$this->email = $un;
		$this->password = $pwd;
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
        }
        
        function tempPassword($email){
            // see if the email exists in database 
            $succeed = true;
            $sql = "SELECT COUNT(*) FROM members WHERE user_email = '$email'";
            $result = mysql_query($sql)or die('Could not find member: ' . mysql_error());
            
            if (!mysql_result($result,0,0) > 0) {
            //error('Email Not Found!');
                $succeed = false;
            } else {
                //Generate a RANDOM MD5 Hash for a password
                $randomPassword = md5(uniqid(rand()));

                //Take the first 8 digits and use them as the temp password
                $newPassword = substr($randomPassword, 0, 8);

                // Make a safe query
                $query = sprintf("UPDATE `members` SET `user_password` = '%s' WHERE `user_email` = '$email'",
                            mysql_real_escape_string($newPassword));

                mysql_query($query)or die('Could not update members: ' . mysql_error());

                //Email password
                $subject = "New Password"; 
                $message = "Your temporary password for SOUSMS is as follows:
                ---------------------------- 
                Password: $newPassword
                ---------------------------- 
                Please change this password when you login"; 

                if(!mail($email, $subject, $message,  "FROM: SOUSMS <soustockmarketsimulation@gmail.com>")){ 
                   die ("Sending Email Failed, Please Contact Site Admin! (soustockmarketsimulation@gmail.com)"); 
                }else{ 
                      error('New Password Sent!.');
                }
            }
            return $succeed;
}

?>
     