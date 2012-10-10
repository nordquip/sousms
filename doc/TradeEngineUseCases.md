#Trading Engine Use Cases

## ID  UCTradeEngineBuy

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