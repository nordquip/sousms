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
