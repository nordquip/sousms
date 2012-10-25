##ID	
	UC Login
###Actors	
	User, Stock
###Desription	
	Varification of Users Username and Password 
###Preconditions	
	The user inputs the correct username and password
	The user inputs the incorrect username and password
###Postcondition	Successful Login
	Unsuccessfull Login
###Dialog	
	1. User logged in correctly and moves to trade engine
	2.User logs in incorrectly and is givin an Error message 
	2.1 Incorect log in is logged 
	2.1.1 User returns to log in screen for another attempt
	3. User is incorrect to many times and is locked out for a specific amount of time
