//To call function just call checkName
//It checks a username to make sure it is only letters a-z and A-Z.
checkName($userName)
{
	if(preg_match([a-z][A-Z])
	{
		echo "Your username is ok.";
	}
	else
	{
		echo "Wrong username.";
	}
}
