###ID	
	UC User Account Information
##Actors	
	Users, Users Accounts
##Description	
	User has access to account information
##Preconditions	
	User chooses Transactions Info
	User chooses Financial Account Info
	User chooses Personal information
##Postconditions	User is redirected to Transactions info page
	User is redirected to Financial info page
	User is redirected to Personal info page
	User makes an incorrect choice 
##Dialog	
	1. Users transaction data is avalable
	1.1 New Transaction
	1.1.1 Start new transaction
	1.1.2 Buy Stock
	1.1.3 Sell Stock
	1.2 Transaction History
	1.2.1 See Transaction History
	1.3 Error message
	2. Users Financial data is avalable
	2.1 See Account history and balance
	2.2 Make a deposit
	2.3 Make a withdraw
	2.4 Error message
	3. User personal data is avalable
	3.1 View Personal data
	3.2 Make changes to personal data
	3.3 Error message
	4. User is givin an Error message 


#Trade Engine: 

##ID 
	0UCUsrPurchase 

##Actors 
	EndUser, System 

##Description 
	EndUser purchasing share(s) of a stock 

##Preconditions 
	EndUser is authenticated to use software 
	
##Postconditions 
	Money is deducted from cash, share(s) added to portfolio (successful) 
	No changes to database (unsuccessful)

##Dialog
	1. EndUser requests to purchase share(s) of a stock 
	2. System requests current price of said stock, calculates total cost of purchase 
	3. If EndUser does not have the funds to make the trade, unsuccessful postconditions established (returns to step 1), if user can afford the purchase, successful postconditions established.  


##ID 
	UCUsrSell 

##Actors 
	EndUser, System 

##Description 
	EndUser selling share(s) of a particular company 

##Preconditions 
	EndUser is authenticated 
	EndUser owns at least 1 share 

##Postconditions 
	Money is added to cash, share(s) deducted from portfolio (successful) 
	No changes to database, error message displayed (unsuccessful) 

##Dialog 
	1. EndUser requests to sell share(s) 
	2. System requests current price of stock, calculates total 
	3. If the data does not get tampered with along the way?, succesful postconditions established, otherwise, unsuccessful postconditions established (return to step 1).

### UCSubmitFeedData (Keith K)

### Actors
* DataFeed 
* Database 

### Description
* Data feed sends one tick of data for one symbol to database

### Preconditions
* Database is up and running

### Post Conditions
* Successful Data from sms feed was stored in database 
* Un-successful Data from sms feed was not stored in database

### Dialog
* Feed supplies symbol
* Feed supplies all field values for one tick for supplied symbol
* System responds (database) stored data successfuly or not


### ID
	* User Login
## Actors
	* User, System
## Description
	* Verify user access priviledges
## Preconditions
	* User enters correct username and password
	* User enters incorrect username and password
## Postconditions
	* Successful login
	* Unsuccssful login
## Dialog
	1.  System prompts user for username and password
	2.  User successfully enters information and allowed access
	2.1 User is unsuccessfully enters information and access is denied
	2.1.1  System logs unsuccesful attempt
	2.1.2  System prompts user again for username and password
	3.  System locks user account after three failed attempts

##ID
 ViewStockSnapshot
###Actors
 User, SOUSMS
###Description
 User can see a "snapshot" of selected stock info (on mobile device).
###Preconditions
 User is logged in to SOUSMS.
###Postconditions
 Successful: User views desired stock info.
 Unsuccessful: Error message.
###Dialog
 1. User requests to view stock snapshot by symbol
 1.1 Requested symbol refers to valid stock.  Display stock info: symbol, company name, current price, high/low.
 1.2 Requtested symbold does not refer to valid stock.  Display error message.
 2. User can request additional symbol snapshots until done.