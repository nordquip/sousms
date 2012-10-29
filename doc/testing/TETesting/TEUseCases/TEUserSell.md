### TEUserSellStockTest

#### Actors
* Tester / User

#### Description
* Tester makes sure that sell features function.

#### Preconditions
* User has created an account
* User has logged in
* User has at least one stock

#### Postconditions
* Successful Sell - Tester sold stocks
* Unsuccessful Sell – Tester could not sell Stocks

#### Dialog
1. User opens Application
2. User is greeted with the login screen with option to create account.
3. User creates account/logs in to application 
	(unsuccessful if invalid password)
4. User checks stocks owned
5. User searches for current stock price
6. User defines amount to sell
7. User clicks sell
	(unsuccessful if amount is more than owned)
8. User confirms sell