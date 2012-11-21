<?php
//sanitize.php
//This file contains methods to sanitize:
//Username
//Email
//Password
//Int
//Float

//vars from input
$username = trim($_POST['username']);

$password = trim($_POST['password']);

$email = trim($_POST['email']);

$int = trim($_POST['int']);

$float = trim($_POST['float']);

print ("Sanitize.php");


//Username

function checkName(){
	$pattern ='[a-zA-Z0-9]*'; 
	if(preg_match($pattern, $username))
	{
		echo $username . " is an acceptable username.";
	}
	else
	{
		echo $username . " is not an acceptable username.";
	}
}


//Password
function checkpassword(){             
	$p = $password;
	If (empty($password)){
             echo 'Please enter a password.';
    	}
	else{
        	//accept password entry and sanitize it
        	//mysql_real_escape_string() calls MySQL's library function 
    		//mysql_real_escape_string, which prepends backslashes to the 
        	//following characters: \x00, \n, \r, \, ', " and \x1a.
        	$password = stripslashes(mysql_real_escape_string($password));
        }
	echo 'Input password ' . $p . ' gets changed to ' . $password;
}

//Email
// Check for an email address:
function checkemail(){
	$pattern = '/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/';
	if (empty($email)){
		echo 'Please enter an email address.';
	}
        //checks to see if it is a proper token
  	elseif(preg_match($pattern, $email)){
  		echo $email . '\'s syntax is OK.'; 
		$e = mysqli_real_escape_string($dbc, $email); // There is no $dbc variable, this won't work. ~HB
	}
}

//Int
function checkint(){
	$bool = false;
	if (empty($int)){
		echo 'Please enter an integer.';
	}
	else{
		$bool = is_int($int);
	}
	if($bool){
	  	echo $int . " is an int.";  	
	}
	else{
	  	echo $int . " is not an int.";
	}
	return $bool;
}


//Float
 function checkFloat(){
    $pattern = '/^[0-9]\{0,\}[.]\{0,1\}[0-9]\{0,\}$/';
	if (empty($float)){
		echo 'You forgot to enter your email address.';
	}
	else{
		$x = preg_match($pattern, $float);
	}
	if ($x){
		echo $float . " is float";
	}
	else{
	  	echo $float . " Is not a float";
	}
	return $x;
}


//calls the functions
checkName();
checkpassword();
checkemail();
checkint();
checkFloat();

//EOF
?>
