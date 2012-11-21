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

function checkName()
{
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
function checkpassword()
{             
	$p = $password;
	If (empty($password)){
             echo 'Your password is empty';
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
function checkemail()
{
	if (empty($email))
	{
		$errors[] = 'You forgot to enter your email address.';
	}
        //checks to see if it is a proper token
  elseif(preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $_POST['email'] > 0))
  	{
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
		
	}
}

//Int

function checkint()
{
	if(is_int($int))
	  {
	 	print("is int");
	 	print($int);
	  }
	else
	  {
		print("is not int");
	 	print($int);
	  }
}


//Float


 function checkFloat()
{
    $pattern = '/^[0-9]\{0,\}[.]\{0,1\}[0-9]\{0,\}$/';
		
    $x = preg_match($pattern, $float);
	if ($x)
	{
		print ($float . " is float");
	}
	else
	  {
	  	print ($float . " Is not a float");
	  
	  }         
}


//calls the functions
checkName();
checkpassword();
checkemail();
checkint();
checkFloat();

//EOF
?>
