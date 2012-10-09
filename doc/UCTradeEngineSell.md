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
* Transaction successful reply with receipt.
* Output Error, Not an authorized user, can't complete transaction.
* Output Error, User does not have stock to be sold, can't complete transaction.
* Output Error, User does not have enough shares, can't complete transaction

### Dialog
1. User Logs into account with User ID and password.
	*Output error if user does not have account, does not log in.
2.  Enters stock symbol, and amount of shares to sell.
3.  Confirm transaction  
	*Output error if system cannot locate appropriate stock symbol.
	*Output error if user does not own number of shares being sold.
	*Output transaction successful.

 

