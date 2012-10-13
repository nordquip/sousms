#Trading Engine Use Cases

## ID  UCTradeEngineBuy
Written by Jeff Karmy

### Actors
User or Program 

### Description
Buy stock

### Preconditions
* User logged in to account

### Post Conditions
* Successful:  User purchases stock.
* Fail:  Incorrect stock symbol.
* Fail: User does not have enough cash for amount of stocks requested.

### Dialog

1.  Enters stock symbol, and amount of shares to buy.
2.  Confirm transaction  
	* Output error if system cannot locate appropriate stock symbol.
	* Output error if user does not have enough cash for amount of stocks.
	* Output transaction successful.
3. Save or print receipt


## ID  UCTradeEngineSell
Written by Jeff Karmy

### Actors
User or Program 

### Description
Sell stock shares from user account

### Preconditions
* User logged in to account

### Post Conditions
* Successful:  User sells stocks.
* Fail:  Incorrect stock symbol.
* Fail: User is trying to sell more shares then user has.

### Dialog

1.  Enters stock symbol, and amount of shares to sell.
2.  Confirm transaction  
	* Output error if system cannot locate appropriate stock symbol.
	* Output error if user does not own number of shares being sold.
	* Output transaction successful.
3. Save or print receipt


## ID  UCConditionalBuyAtUserPrice 
Written By NickolausDS

### Actors
 * User, Stock Market Simulator

### Description
 * User sets an automatic buy transaction to happen if a stock drops to a user-defined price (UDP).

### Preconditions
 * User is Logged in

### Postconditions
 * Successful -- The condition will be set, and automatically buy if stock price reaches UDP.
 * Fail -- The condition is not set.
 * Timeout -- The condition is canceled. (See UCCancelTrade)

### Dialogue
 1. User specifies stock symbol and number of shares to buy. 
 2. If stock symbol doesn't exist
	* back to 1
 3. If user does not have the money to buy stock at UDP.
	* back to 1
 4. The condition is set
 5. The condition waits for Stock price to lower to UDP.
 6. If stock price lowers to UDP.
	* Postcondition Success is met.
 7. If the stock has reached Timeout
	* Postcondition Timeout.
 8. Back to 5.

## ID  UCConditionalSellAtUserPrice
Written by Garrett Skelton

### Actors
User 

### Description
Sell stock automatically based on price

### Preconditions
* Authorized User Account
* Appropriate Stock Symbol 
* Sufficient (>0) stocks to complete transaction

### Post Conditions
* Transaction successful output receipt.
* Output Error, Not an authorized user, can't complete transaction.
* Output Error, Incorrect stock symbol, can't complete transaction.
* Output Error, User does not have any shares of stock specified, can't complete transaction

### Dialog
1. User Logs into account with User ID and password.
	* Output error if user does not have account, does not log in.
2.  User picks stock from a dropdown list of owned stocks
3.  User designates a price point, number of shares to sell, and whether the rule is to sell when the value is greater or less than the price point.
4.  Confirm Rule  
	* Output error if system cannot locate appropriate stock symbol.
	* Output error if user has fewer shares than the amount of shares they're trying to sell.
	* Output rule successful.
	* Output receipt.
5. Save receipt
6. Check stock value against user defined price point
7. Reconfirm rule (to make sure the user hasn't already sold their stocks or anything)
8. If the rule evaluates true:
	sell the stock
9. Else
	goto 6
10. delete the rule


## ID  UCStockPriceQuery
Written By NCHelix (Jeremy Barnes)

### Actors
 * User, Stock Market Simulator

### Description
 * User requests a price on a specific stock symbol

### Preconditions
 * User is Logged in

### Postconditions
 * Successful -- The stock price will be found, and returned to user
 * Fail -- The stock price is not returned.

### Dialogue
 1. User specifies stock symbol 
 2. If stock symbol doesn't exist
	* back to 1
 3. Stock price is listed for user.

## ID UCQueryPersonalAssets
Written by Ben Harris

### Actors
 * Stock Market Simulator User (SMSU)
 
### Description	
 * Query is called on login and after every transaction to display amount of "cash" on account
 
### Preconditions	
 * SMSU has logged into valid account

### Postconditions	
 * Successful - SMSU is shown their "cash" balance
 * Unsuccessful - There shouldn't be an unsuccessful result (assuming a successful login)

### Dialog		
 1. SMSU logs onto their account, query is called and result is displayed on the UI
 2. If trade is successful, then query is re-called and result is displayed
 3. If cash is deposited/withdrawn, query is re-called and result is displayed

## ID UCStockSymbolSearch
Written By AnthonyKaiserman

### Actors
 * User, Stock Market Simulator

### Description
 * User requests a stock symbol for a company

### Preconditions
 * User is Logged in

### Postconditions
 * Successful- The stock symbol will be returned to the user
 * Fail- an error message is returned

###Dialogue 
 1. User specifies company to find a stock symbol for.
 2. If stock symbol is not found return an error message and return to step 1.
 3. If stock symbol is found return stock symbol for the company.


## ID UCQueryTopStocks
Written By Garrett Skelton

### Actors
 * User

### Description
 * User requests a list of top stocks

### Preconditions
 * User is logged on

### Postconditions
 * Successful: User is fed a page with information on top earning stocks
 * Failure: User is fed an error page

### Dialog
1. User clicks a button to show top stocks
2. User may choose a timeframe (day, week, month, year) and whether they want absolute or relative earnings
3. Stocks are ranked based on the change in value over the user defined timeframe
4. Top stocks are returned to the user


## ID UCQueryAvailableShares
Written By Brittany Dighton

### Actors
 * User

### Description
 * User views available shares of selected symbol

### Preconditions
 * User is logged in

### Postconditions
 * Success: Available shares of selected symbol displayed
 * Failure: Error message displayed

### Dialog
1. User selects desired symbol
2. If system unable to find symbol specified
	* Error message displayed
	* Return to 1.
3. System displays available shares of symbol specified


## ID UCQueryStockData
Written By Jeff Miller 

### Actors
 * Authorized users

### Description
 * Return resultset for a given stock symbol

### Preconditions
 * TBA (what comes from remote vs. NASDAQ feed?)

### Postconditions
 * TBA

### Dialog
1. Calls UC:ueryRemoteDataForSymbol
2. Merge data from returned DTO with NASDAQ data
3. Return resultset

## ID UCQueryRemoteDataForSymbol
Written By Jeff Miller 

### Actors
 * Trade engine

### Description
 * Returns resultset compiled from remote sources

### Preconditions
 * Can't be exposed externally (IP restrictions at minimum)
 * Valid symbol must be used
 * Synchronous-mode defaults to asynchronous (for speed)
 * Remote data sources for symbol info must be known in advance

### Postconditions
 * Data set is returned if any found (success)
 * Empty data set returned if no data found (success, no data)
 * Error status code and message set if exception. Empty data set returned. (failure)

### Dialog
1. Create a response Data Transfer Object (DTO) (fields needed)
2. Validate symbol, if failure set error code/message in DTO and skip to end
3. Create empty resultset
4. Call UCFindRemoteDataForSymbol with symbol and wait depending on synchronous-mode
5. Query database for records associated with symbol
6. Fill resultset
7. Add resultset to DTO
8. Return serialized DTO

## ID UCFindRemoteDataForSymbol
Written By Jeff Miller 

### Actors
 * Trade engine

### Description
 * Query and compile data from remote data sources

### Preconditions
 * Can't be exposed externally (IP restrictions at minimum)
 * Remote data sources for symbol info must be known in advance

### Postconditions
 * Returns true if data found
 * Returns false if data not found

### Dialog
1. Queries twitter feed for any data associated with symbol
2. Queries any other feed URLs stored in database
3. Stores results for feeds associated with symbol in database if new
