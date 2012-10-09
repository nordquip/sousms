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
5. Logout or perform another transaction.

 

