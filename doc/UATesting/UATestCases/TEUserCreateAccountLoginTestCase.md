### TEUserCreateAccountLoginTestCase

#### Description
* Tester creates account and / or logs into program

### Variables Needed
* UserID -- The id for the user who is buying stock.
* passWord -- The password for the user who is buying stock

#### Dialog
1. User opens Application
2. User is greeted with the login screen with option to create account.
3. User creates account in to application using UserID = SauronTheWhite and passWord = th30n3r1ngn4ry4
	(successful if given the option to log in / logged in)
	(unsuccessful if invalid password)
	(unsuccessful if UserID can't be validated)
     if not logged in user logs in using above UserID and passWord
		(unsuccessful if invalid password)
		(unsuccessful if UserID can't be validated)