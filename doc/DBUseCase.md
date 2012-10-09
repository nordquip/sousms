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

###ID	
	UC User Account Information
##Actors	
	Users, Users Accounts
##Description	
	User has access to account information
##Preconditions	
	User chooses Transactions Info
	User chooses Financial Account Info
	User chooses Personal information
##Postconditions	User is redirected to Transactions info page
	User is redirected to Financial info page
	User is redirected to Personal info page
	User makes an incorrect choice 
##Dialog	
	1. Users transaction data is avalable
	1.1 New Transaction
	1.1.1 Start new transaction
	1.1.2 Buy Stock
	1.1.3 Sell Stock
	1.2 Transaction History
	1.2.1 See Transaction History
	1.3 Error message
	2. Users Financial data is avalable
	2.1 See Account history and balance
	2.2 Make a deposit
	2.3 Make a withdraw
	2.4 Error message
	3. User personal data is avalable
	3.1 View Personal data
	3.2 Make changes to personal data
	3.3 Error message
	4. User is givin an Error message 

