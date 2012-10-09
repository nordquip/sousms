## ID  UCTradeEngineSell

### Actors
User or Program 

### Description
Sell Stocks

### Preconditions
* Authorized User
* Stock Symbol 
* Sufficient shares of stocks for transaction

### Post Conditions
* Transaction successful reply with receipt
* Not an authorized user
* User does not have stock to be sold
* User does not have enough shares for transaction

### Dialog
1. User Log into account
	Output error if user does not have account.
2.  Enters stock symbol, and amount of shares.
3.  Confirm transaction  
	Output error if system cannot locate appropriate stock symbol.
	Output error if user does not posse number of shares being sold.
	Output transaction successful.

 

