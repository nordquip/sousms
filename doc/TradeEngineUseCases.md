#Trading Engine Use Cases

## ID  UCTradeEngineBuy
Written by Jeff Karmy

### Actors
User or Program 

### Description
Buy stock

### Preconditions
* Authorized User Account
* Appropriate Stock Symbol 
* Sufficient funds for stocks to complete transaction

### Post Conditions
* Transaction successful output receipt.
* Output Error, Not an authorized user, can't complete transaction.
* Output Error, Incorrect stock symbol, can't complete transaction.
* Output Error, User does not have enough cash for amount of stocks requested, can't complete transaction

### Dialog
1. User Logs into account with User ID and password.
	* Output error if user does not have account, does not log in.
2.  Enters stock symbol, and amount of shares to buy.
3.  Confirm transaction  
	* Output error if system cannot locate appropriate stock symbol.
	* Output error if user does not have enough cash for amount of stocks.
	* Output transaction successful.
	* Output receipt.
4. Save or print receipt
5. Logout or perform another transaction starting again with number 2.


## ID  UCTradeEngineSell
Written by Jeff Karmy

### Actors
User or Program 

### Description
Sell stock shares from user account

### Preconditions
* Authorized User Account
* Appropriate Stock Symbol 
* Sufficient shares of stocks to complete transaction

### Post Conditions
* Transaction successful output receipt.
* Output Error, Not an authorized user, can't complete transaction.
* Output Error, User does not have stock to be sold, can't complete transaction.
* Output Error, User does not have enough shares, can't complete transaction

### Dialog
1. User Logs into account with User ID and password.
	* Output error if user does not have account, does not log in.
2.  Enters stock symbol, and amount of shares to sell.
3.  Confirm transaction  
	* Output error if system cannot locate appropriate stock symbol.
	* Output error if user does not own number of shares being sold.
	* Output transaction successful.
4. Save or print receipt
5. Logout or perform another transaction starting again with number 2.

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

### Dialogue
 1. User specifies stock symbol and number of shares to buy. 
 2. If stock symbol doesn't exist
	* back to 1
 3. If user does not have the money to buy stock at UDP.
	* back to 1
 4. The condition is set
 5. The condition waits for Stock price to lower to UDP.
 6. If stock price lowers to UDP.
	* Stock is bought
	* back to 1 and condition ceases to exist.
 7. Back to 5

## ID  UCConditionalSellAtUserPrice
Written by Garrett Skelton

### Actors
User or Program 

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

## ID:	QueryPersonalAssets
Written by Ben Harris

### Actors
 * Trade Engine User (TEU)
 
### Description	
 * TEU submits a request to see how much "money" is in their account
 
### Preconditions	
 * TEU has logged into valid account

### Postconditions	
 * Successful - TEU recieves balance of "cash" in their account
 * Unsuccessful - There shouldn't be an unsuccessful result (assuming a successful login)

### Dialog		
 * After successful login, TEU can submit to see how much cash is in their account

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
