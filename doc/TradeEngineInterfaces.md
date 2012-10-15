
#Trading Engine Interfaces

## ID  IBuyStock
Written By NickolausDS

### Actors
* User Interface
* Database/Stock Market

### Description
* Buy stock for a single logged in user. This interface is expected to be called indirectly by the user through a user interface or by another script. As such it will check for bad parameter data.

### Preconditions
* User is logged in. 

### Post Conditions
* Success: Buy completes successfully
* Failure: Buy transaction does not go through.

### Input Parameters 
* UserID -- The id for the user who is buying stock.
* Stock Symbol -- The specific company for which we are buying stock.
* Stock Amount -- The amount of stock we are buying for the user.

### Returns
* An appropriate message (string) for success or failure.

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

## ID  ISellStock
Written by Brittany Dighton

### Actors
* User Interface
* Database

### Description
* Sell stock for a user who is already logged in. 

### Pre Conditions
* User is logged in. 

### Post Conditions
* Success: Stock successfuly sold
* Failure: Stock not successfuly sold.

### Input Parameters 
* UserID -- ID of the user selling stock.
* Stock Symbol -- Symbol for stock being sold.
* Stock Amount -- Amount of stock being sold.

### Returns
* An appropriate message (string) - either of a successful sell or an error message.

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


