<?php
//sanitize.php
//This file contains methods to sanitize:
//Username
//Email
//Password
//Int
//Float
print ("Sanitize.php");


//Username method
$username = trim($_POST['username'])
checkName($userName)
{
	if(preg_match([a-zA-Z0-9]*, $username))
	{
		echo "Your username is ok.";
		print($username);
	}
	else
	{
		print ("Wrong username.");
	}
}


//Password
$password = trim($_POST['password']);
                
     If (empty($password) || (!(ctype_alnum($password))))
        {
            $mistakes[] = 'Your password is either empty or Incorrect';
    	}
                
    else
        {
         //accept password entry and sanitize it
         //mysql_real_escape_string() calls MySQL's library function 
    	 //mysql_real_escape_string, which prepends backslashes to the 
         //following characters: \x00, \n, \r, \, ', " and \x1a.
            $password = mysql_real_escape_string(stripslashes($password));
        }


//Email
// Check for an email address:
$email = trim($_POST['email']);
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
	}
        //checks to see if it is a proper token
	elseif(preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $_POST['email'] > 0))
		{
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
		
	}


//Int
$int = trim($_POST['int']);

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

//Float
$float = trim($_POST['float']);

 function checkFloat($float)
{
    $pattern = '/^[0-9]\{0,\}[.]\{0,1\}[0-9]\{0,\}$/';
		
    $x = preg_match($pattern, $float)
	if ($x)
	{
		print ($float " is float");
	}         
}



?>