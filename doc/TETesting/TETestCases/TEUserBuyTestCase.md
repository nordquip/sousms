### TEUserBuyStockTestCase

#### Description
* Tester makes sure that buy features function.

### Variables Needed
* stockSymbol -- The specific company for which we are buying stock.
* numShares -- The amount of stock we are buying for the user.


#### Preconditions
* User has created an account
* User has logged in
* Tester has a balance

#### Dialog
1. User searches for stock symbol using stockSymbol INTC
	(successful if symbol is found)
	(unsuccessful if symbol isn't found)
2. User defines amount to purchase using numShares
	(unsuccessful if numShares are negative)
	(unsuccessful if numShares is more than available shares)
3. User clicks buy
	(unsuccessful if not enough funds to purchase shares)
4. User confirms buy