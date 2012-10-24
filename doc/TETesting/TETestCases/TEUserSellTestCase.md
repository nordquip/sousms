### TEUsersellStockTestCase

#### Description
* Tester makes sure that buy features function.

### Variables Needed
* stockSymbol - The specific company for which we are selling stock.
* numShares - The amount of stock we are selling for the user.


#### Preconditions
* User has created an account
* User has logged in
* Tester has a stock balance to sell

#### Dialog
1. User searches for owned stock symbol using stockSymbol INTC
	(successful if symbol is found)
	(unsuccessful if symbol isn't found)
2. User defines amount to sell using numShares
	(unsuccessful if numShares are negative)
	(unsuccessful if numShares is more than available shares to sell)
3. User clicks sell
	(unsuccessful if not enough stock to sell number of specified shares)
4. User confirms sell