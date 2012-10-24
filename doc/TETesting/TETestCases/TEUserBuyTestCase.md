### TEUserBuyStockTestCase

#### Description
* buying a stock

#### Preconditions
* User has logged in
* Tester has a balance

#### Dialog
1. User defines amount to purchase using numShares
	(unsuccessful if numShares are negative)
2. User clicks buy
	(unsuccessful if not enough funds to purchase shares)
3. User confirms buy
4. Application confirms buy