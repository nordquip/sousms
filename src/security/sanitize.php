<?php
//sanitize.php
//This file contains methods to sanitize:
//Username
//Email
//Password
//Int
//Float


//Username
function checkName($username){
	$pattern ='/[a-zA-Z0-9]*/'; 
	return  preg_match($pattern, $username);
}


//Password
function checkpassword($password){             
	$pattern = '/[a-zA-Z0-9!@#$%^&*(),.-_=+\ ~`"?\{\}\[\]]*/';
	return preg_match($pattern, $password);
}


//Email
function checkemail($email){
	$pattern = '/[a-zA-Z0-9_-.+]@[a-zA-Z0-9-].[a-zA-Z]/';
	return preg_match($pattern, $email);
}


//Int
function checkint($int){
	return is_int($int);
}


//Float
function checkFloat($float){
	$pattern = '/^[0-9]\{0,\}[.]\{0,1\}[0-9]\{0,\}$/';
	return preg_match($pattern, $float);
}

//EOF
?>
