#User Account Use Cases					
 

##Initial Account Access
###Actor
 *User
###Descritpion
	*User enters accoung information to register with website
###Precondition
	*Access to website
###Post Condition
	*User account registered- succesful
	*User not in databze no account registered - unsuccesful

###Dialog
1. 1st Time customer clicks Register button.
2. The system displays registration page prompts for Customer ID and Password. Also a Activate button.
3. User enters User Name.
4. User enters first time use password.
5. User enters new password.
6. User enters new password to confirm.
7. User presses Activate button.
8. The system registers Customer’s Customer object from 0 to 1 shwoing its activated.
9. The system displays login page.
 



##Validation
###Actor
*User
###Description
*The user enters credentials, username and password, for verification and entry into the secure site
###Precondition
*User has already established user account
###Postcondition
*User enters secure site,successful

*User account is locked, unsuccessful
###Dialog
1. User enters the correct username and password and clicks submit
2. Users credentials are compared to information stored in the database
3. Credentials are verified
4. User enters the secure site to begin session  

###Alternative Path 1
1. User enters the incorrect username or password and clicks submit
2. Users credentials are compared to information stored in the database
3. Credentials do not match and are not verified
4. User receives error message and is asked to re-enter credentials
5. User enters correct credentials, return to original path step 2
6. User enters incorrect credentials, return to alternative path 1 step 1 
7. User enters incorrect credentials n times and account is locked  

###Alternative Path 2
1. User clicks forgot password
2. User inputs email address and submits
3. Email is verified and temp password sent
4. User inputs new password.
5. User enters correct credentials, return to original path step 2


##Password Recovery
###Actor
*User
###PreCondtions
*Exsisting Account
###Post Condtions
*Access User Account
###Dialog
1. User clicks Forgot username or password?
2. Goes to recover screen.
3. User enters email.
4. User password compared to user object.
5. If found temporary password or user name sent to user registered email.
6. Return to login screen.

##Password Change
###Actor
 *User
###PreCondtions
	*Exsisting Account1. User
###Post Condtions
	*Access User Account
###Dialog
1. User clicks change password.
2. Goes to change password screen.
3. User Enters email and current password.
4. User enters new password.
5. User enters new password to confirm.
6. User old password compared to user object.
7. If found password is changed to new password.
8. Return to login screen.

###Logout
*User
### Precondition
*User logged in on account page.
### Post Conditions
*User logged out of system
###Dialog
1. User clicks logout button.
2. User logged out.


##Securities Information
###Actor
*User
###Description
*How the Securities informtion will be displayed
###Preconditions
*User has successfully logged into theor account
###PostConditions
*Securities display properly - successful

*Securities not displayed ERROR - unsuccessful
###Dialog
1. User is successfully logged into their account
2. System will display the symbols owned by the account holder
3. System will display the symbol name, how many shares are owned by the user, and their worth

##Securities Total Value
###Actor
*User
###Description
*Display of total value of users owned securities
###Preconditions
*User has successfully logged into there account
###PostConditions
*Total value of owned securities display properly - successful

*Securities not displayed ERROR - unsuccessful
###Dialog
1. User is successfully logged into their account
2. System will display the total value of owned securities without details.
3. User can select total value to display detailed information of owned stocks.

##Deposit
###Actor
*User
###Description
*User is validated and ready to make a deposit
###Preconditions
*User login was successfully executed
###Postconditions
*User deposits funds into acct. - successful

*Funds not deposited into user acct. - unsuccessful
###Dialog
1. User requests deposit of funds into acct.
2. System validates user funds for deposit
3. If validation unsuccessful, display error message, back to step 1
4. System calculates addition of funds into user acct.
5. System displays new balance of funds into user acct.
6. If new balance displays correctly, successful postconditions established, else unsuccessful postconditions established


##StockSale
###Actor
*User
###Description
*User is validated and ready to sell desired stock
###Preconditions
*User login successfully executed
###Postconditions
*User completes sale of stock and receives funds - successful

*User does not complete sale and/or does not receive funds - unsuccessful
###Dialog
1. User requests sale of desired stock
2. System validates user ownership of stock
3. If validation of user ownership unsuccessful, display error message, return to step 1
4. System calculates addition of funds into user acct.
5. System subtracts ownership of stock from user acct.
6. System displays new balance of funds in user acct.
7. System displays new ownership of stock in user acct.
8. If new balance of funds and ownership of stock displays correctly, successful postconditions established, else unsuccessful postconditions established


##StockPurchase
###Actor
*User
###Description
*User is validated and ready to purchase desired stock
###Preconditions
*User login was successfully executed
###Postconditions
*User receives purchased stock and funds decremented accordingly - successful

*User does not receive stock and/or funds not decremented accordingly - unsuccessful
###Dialog
1. User requests purchase of desired stock and quantity
2. System validates user funds for purchase of stock
3. If validation of user funds unsuccessful, display error message, return to step 1
4. System calculates subtraction of funds from user acct.
5. System adds ownership of stock to user acct.
6. System displays new balance of funds in user acct.
7. System displays new ownership of stock in user acct.
8. If new balance of funds and ownership of stock display correctly, successful postconditions established, else unsuccessful postconditions established


##GetTradeHistory
###Actor
*User
###Description
*User sees trade history displayed 
###Preconditions
*User has successfully logged in
###postconditions
*User's correct trade history displayed - successful

*User's trade history not displayed, or displayed incorrectly - unsuccessful
###Dialog
1. User clicks trade history button
2. System queries data base for user's trade history information
3. System displays information
4. If information displays correctly, successful postconditions established, else unsuccessful postconditions established