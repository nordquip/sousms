#Mobile Interfaces
##UserAuthentication(userID, password)
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

##DynamicSearchAvailableStocks(searchToken)

Written By Nick Patterson

###Description

This procedure will:

* Search for a stock using an iTunes style search. Each letter will act as a filter, reducing the list displayed. If a user puts in MS they get a shortened list including both Microsoft and Morgan Stanley.

###Input Parameter definitions

* searchToken - The symbol or partial symbol of the stock you want to investigate.

###Returns

* Success:
	* Returns list item(s) with stock symbols and current price.
	
* Failure:
	* This technically can not fail as it is simply a list filter. However, a blank return could be considered by the user as a failure, thus on a blank return a string will be returned reading something like "Your search failed to return results, try another symbol."


##BuyStock(stockSymbol, numShares, userID)

Written By Jian Rossi

###Description 
This procedure will:

* Verify the user has enough money to buy the stock.
* Verify the stock is valid.

	If the above conditions are met, account balance is decremented, account holdings is incremented, and the respective stock shares are added to their portfolio.
	
###Input Parameter definitions

* UserID -- The ID for the user who is buying stock.
* stockSymbol -- The specific security for which the user is buying stock.
* numShares -- The number of stocks we are buying for the user. 
	
###Returns

* Success:
	* 'Transaction Approved'
	
* Failure:
	* 'Invalid Stock Symbol'
	* 'Not enough money to purchase stock'
