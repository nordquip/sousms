
#Trading Engine Interfaces

## BuyStock(stockSymbol, numShares, userID)
Written By NickolausDS

### Description
This procedure will:

* Verify the user is logged in.
* Verify the user has enough money to buy the stock. 
* Verify the stock is valid. 

If the above conditions are met, it will decrement money from the user's account, and add the respective stock shares to their account.

### Input Parameter definitions
* UserID -- The id for the user who is buying stock.
* stockSymbol -- The specific company for which we are buying stock.
* numShares -- The amount of stock we are buying for the user.

### Returns
* Success:
	* 'Transaction Approved'
* Failure: 	
	* 'User ID could not be validated'
	* 'Invalid Stock Symbol'
	* 'Not enough money to purchase stock'
			

## SellStock(stockSymbol, numShares, userID)
Written by Brittany Dighton

### Description
This procedure will:
* Verify that the user is logged in.
* Ensure the user has enough shares to sell numShares.
* If so, 
	* decrement the user's shares accordingly
	* increment the user's cash accordingly
* If not, failure.

### Input Parameters
* UserID -- ID of the user selling stock.
* stockSymbol -- Symbol for stock being sold.
* numShares -- Amount of shares being sold.

### Returns
* If success, 
	* 'Transaction Complete'
* If failure, one of the following
	* 'Invalid UserID'
	* 'Invalid Stock Symbol Entered'
	* 'Insufficient Shares to Complete Transaction'


## ShowCash(userID)
Written by Ben Harris

### Description
This procedure:
* is not called directly by the user
* is called automatically before/during/after most other trade functions


### Input Parameters
* userID -- the ID of the account to show the balance of

### Returns
* success: returns a float or double with "cash balance" on user's account
* if not successful:
	* there is some administrative action on the account and the user should be booted
	* - or -
	* the system is malfunctioning

	
## ID  IStockSymbolSearch
Written By AnthonyKaiserman

### Actors
* User Interface
* Database/Stock Market

### Description
* Search for a stock symbol for a logged in user

### Preconditions
* User is logged in. 

### Post Conditions
* Success: Displays the stock symbol.
* Failure: Displays an error message.

### Input Parameters 

* CompanyName -- Name of company the user wants the stock symbol for.

### Returns
* Stock symbol or error message

## getCurrentPrice(stockSymbol)
Written By NCHelix (Jeremy Barnes)

### Description
This Procedure will:
* Return the current stock price for the given stock symbol

### Input Parameters
* stockSymbol - String representation of Stock symbol.  

### Returns
* Success: Returns a double representing the current price of the given stock
* Failure: Invalid stock symbol.



