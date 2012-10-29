### userLogin

### Actors
	* users

### Description
	* user is validated and has access into account

### Pre-condition
	* user is on system list of valid users
	
### Post-condition
	* user allowed access
		(successfull)
	* user denied access
		(insuccessful)
		
### Dialog
	1. user enters login and password
	2. if kogin and password does not match account
			* system gives appropriate error message