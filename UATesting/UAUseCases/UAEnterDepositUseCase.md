### EnterDeposit

### Actors
	* users

### Description
	* user submits funds for deposit

### Pre-condition
	* user is on system list of valid users
	
### Post-condition
	* user funds deposited in account
		*(successfull)
	* user funds not deposited in account
		*(insuccessful)
		
### Dialog
	1. user requests to deposit a certain amount
	2. system indicates account deposit is successful
	3. system indicates account deposit was unsuccessful
		*gives appropriate error message