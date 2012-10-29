### Trade Use Case

### Actors
	* Users

### Description
	* User submits for a trade transaction

### Pre-condition
	* User has an account
	* User is logged in
	* User has balance
	* User has located the 'Trade' option
	
### Post-condition
	* User's trade (buy) goes through
		*(successfull)
	* User's funds are insufficient, trade (buy) does not go through
		*(unsuccessful)
		
### Dialog
	1. User requests a trade by executing the following:
		1. User has located the specific stock
		2. User submits for specific amount of shares
			*unsuccessful if: 
				1. Amount specified is not a number 
				2. Amount is n/a from system
		3. User submits transaction
	2. System compares the transaction cost to the user's available balance
	3. System adds stock and specified amount to User account 
	4. System indicates transaction could not be complete if unsuccessful
		*gives appropriate error message