### UserBuyStockTest

#### Actors
* Tester / User

#### Description
* Tester makes sure that buy features function.

#### Preconditions
* User has created an account
* User has logged in
* User has a balance

#### Postconditions
* Successful Buy - Tester bought stocks
* Unsuccessful Buy – Tester could not buy Stocks

#### Dialog
1. User opens Application
2. User is greeted with the login screen with option to create account.
3. User creates account/logs in to application 
	(unsuccessful if invalid password)
4. User checks balance
5. User searches for stock symbol
	(unsuccessful if symbol isn't found)
6. User defines amount to purchase
7. User clicks buy
	(unsuccessful if not enough funds)
8. User confirms buy