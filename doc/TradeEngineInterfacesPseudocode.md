#Trade Engine Interfaces Pseudocode

##SellStock(stockSymbol, numShares, userID)
Written by Brittany Dighton

**Note:**
* This procedure assumes validateToken(), getPrice(), getPrice() and getShareBalance() 
  are web services which perform the action suggested by their name.
* Steps 1 and 2 will be performed by the PHP interface SellStock.  
  Step 3 will be performed by the Trade Engine core.

***
  
1. Call validateToken()
2. IF token valid THEN
	* call getShareBalance() with *stockSymbol*, *userID*
	* IF share balance >= *numShares* to be sold THEN
		* Push sell request to OpenOrders in database
		* Output "order queued" message
3. Make trade
	1. Pull sell request from OpenOrder
	2. Call stored procedure to decrement share balance of *userID* for *stockSymbol* by *numShares*
	3. Call getPrice() with *stockSymbol*
	4. Call stored procedure to increment account balance of *userID* by *numShares* times price

## BuyStock(stockSymbol, numShares, userID)
Written By NickolausDS

**Web Services**

 * validateToken() -- validate a user is logged in, and that their actions henceforth are legal
 * getPrice() -- get stock price
 * getUserCash() -- get the user's current financial holdings
 * getShareWorth() -- get the current worth of a stock

***

1. Call validateToken()
2. IF token valid THEN
	* call getShareBalance() with *stockSymbol*, *userID*
	* IF getUserCash() >= *numShares* times getShareWorth()
		* Push buy request to OpenOrders in database
		* Output "order queued" message
3. Make trade
	* Pull buy request from OpenOrder
		* Get user's cash balance
		* IF getUserCash() >= *numShares* times getShareWorth()
			* Call stored procedure decrement user cash
		* IF user cash decrement is successful
			* call stored procedure to increment *numShares*
	
## ConditionalBuyStock(stockSymbol, numShares, userID, buyPrice)
Written By AnthonyKaiserman

**Web Services**

 * validateToken() -- validates the user is logged in
 * getUserCash() -- get the user's current financial holdings

***

1. Call validateToken()
2. IF token valid THEN
	* IF getUserCash() >= *numShares* times *buyPrice* THEN
		* Push buy request to OpenConditionalOrders in database
		* RETURN "order queued" message
	* ELSE error message not enough money
   ELSE RETURN error message cannot validate user
3. Trade engine will pull from OpenConditionalOrders que and make trade when/if conditions are met