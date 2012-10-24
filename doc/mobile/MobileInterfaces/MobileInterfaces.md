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
* Sucess
	* 'User Authenticated'
* Failure:
	* 'Invalid username'
	* 'Invalid password'
	
	
##CurrentStockPrice(stockSymbol)

Written By Cody Shilts

###Description

This procedure will:

* Check the current price of a stock
If the condition is met, it take the arguement and return the current price of that stock symbol. If no match is found it will return an error.

###Input Parameter definitions

* stockSymbol - The symbol of the stock you wish to know the price of.

###Returns

* Success:
	* Returns the current price of the stock symbol
	
* Failure:
	* Invalid Stock Symbol, please verify the stock symbol entered is correct
