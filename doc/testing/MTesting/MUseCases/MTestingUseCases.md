# Mobile Use Case 1

## User Login/Authentication

### Actors
* User: Member/Non-Member

### Description
* Member Login is authentic retrieve user account
* Member Login is denied create new account

### Preconditions
* User is a confirmed member
* User Account has been created and stored
* Login is Successful
* User is not a confirmed member
* login unsuccessful

### Postconditions
* If successful Retrieval of User Account 
* If unsuccessful Direct User to create an account 

### Dialog
* Actions Taken by User unless otherwise specified
 1. User begins login
 2. User enters their personal ID and password
 3. Submit for Login
 4. If Unsuccessful	
	1. User is redirected to Login help
	2. Options consist of:
		1. Forgot password or ID number
		2. Create new account
	3. For option 1 submit User email for confirmation 
	4. System sends email on how to recover user account
	4. If option 1 unsuccessful, jump to option 2
	5. If creation successful continue
 5. If successful System retrieves stored user account
 6. If successful System directs User to User's account home page

