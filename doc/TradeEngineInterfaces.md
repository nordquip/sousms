
#Trading Engine Interfaces

## BuyStock(UserID, StockSymbol, AmountOfStock)
Written By NickolausDS

### Description
This procedure will:

* Verify the user is logged in.
* Verify the user has enough money to buy the stock. 
* Verify the stock is valid. 

If the above conditions are met, it will decrement money from the user's account, and add the respective stock shares to their account.

### Input Parameter definitions
* UserID -- The id for the user who is buying stock.
* Stock Symbol -- The specific company for which we are buying stock.
* Amount Of Stock -- The amount of stock we are buying for the user.

### Returns
* Success:
	* 'Transaction Approved'
* Failure: 	
	* 'User ID could not be validated'
	* 'Invalid Stock Symbol'
	* 'Not enough money to purchase stock'
			

## ID IQueryStock
Written By Jeff Karmy

### Actors
* User Interface
* Database/Stock Market

### Description
* Query (research) stock for a logged in user.  This interface can be called by the user through the user interface or buy another program.

### Preconditions
* User is logged in.

### Post Conditions
* Success: Returns stock being queried.
* Fail:  Does not return stock being queried.

### Imput Parameters
* Stock Symbol -- The specific company for which stock is being queried.

### Returns
* An appropriate message (string) of stock being queried or error message.

## SellStock(stockSymbol, numShares, userID)
Written by Brittany Dighton

### Description
This procedure will:
* Verify that the user is logged in.
* Ensure the user has enough shares to sell numShares.
* If so, 
	* decrement the user's shares accordingly
	* increment the user's cash accordingly
*If not, failure.

### Input Parameters
* UserID -- ID of the user selling stock.
* stockSymbol -- Symbol for stock being sold.
* numShares -- Amount of shares being sold.

### Returns
* If success, 
	* 'Transaction Complete'
* If failure, 
	* 'Invalid UserID'
	* 'Invalid Stock Symbol Entered'
	* 'Insufficient Shares to Complete Transaction'

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

## ID  IGetStockPrice
Written By NCHelix (Jeremy Barnes)

### Actors
* User Interface
* Database/Stock Market

### Description
* Query stock price for a single logged in user. 

### Preconditions
* User is logged in. 

### Post Conditions
* Success: Displays the stock price
* Failure: Error Message

### Input Parameters 
* Stock Symbol -- String of the stock symbol user is requesting a price for.

### Returns
* The price of the specified stock, or an error message.


