#Mobile Interfaces
##UserAuthentication(username, password)
Written By Sean Ewing
###Description

This procedure will:
* Verify the user name is in the database
* Verify the password is the appropriate password for the user

If these conditions are met it will allow the user to continue on into the application

###Input Parameter Definitions

* Username -- The Id for the individual trying to access the application
* Password -- The login password that allows authentication to occur

###Returns
* Success: 
	*'User Authenticated'
* Failure:
	*'Invalid username'
	*'Invalid password'