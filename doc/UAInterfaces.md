#User Account Interfaces
###currentValue(symbol)
####This procedure must:
* Identify the correct symbol
* return current value from feed

###totalValue(user)
####This procedure must:
* return a users total value all stocks owned.

### validate (username, password)
####This procedure must:
* identify current user
* compare username
* compare password hash
* if match, set session cookie and open user page
* if not match, return 'username or password did not match' error

### sanitize (infoType, info)
####This procedure must:
* check the information type
* use tokenizer to check info for malicious data
* reject unsafe data with an error message
* pass safe data to database

###securitiesInfo(symbolName, sharesOwned, worth)
####This Procedure must:
* Call Users securities information from the DB
* Display the Securities owned by the user by Name, Shares owned, and their worth

###buyStock(symbol, numberShares, price)
####This procedure must:
* Identify the current user
* check to see if this user has enough cash to buy numberShares at this price
* if so, decrement the user's cash from account accordingly, add numberShares of symbol to user's stock account,
and return 'successful'
* if not, return 'not enough cash' error

###sellStock(symbol, numberShares, price)
####This procedure must:
* Identify the current user
* check to see if this user owns the numberShares to be sold
* if so, increment the user's cash in account accordingly, decrement numberShares of symbol from user's account,
and return 'successful'
* if not, return 'do not own shares' error

###deposit(amount)
####This procedure must:
* Identify the current user
* check to see if this user has amount to be deposited
* if so, increment the user's cash in account accordingly,
and return 'successful'
* if not, return 'insuffecient funds' error