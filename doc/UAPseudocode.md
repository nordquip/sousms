#Pseudocode
##Password Recovery
* GET EnteredUserName
* IF (EnteredUserName == UserName) THEN
* 	New Password Sent to registered email
* ELSE
* 	UserName Failed
* ENDIF

##Initial Account Access
* GET EnteredUserName
* GET EnteredPassword
* 	IF (EnteredUsername == Username && EnteredPassword == Password) THEN
* 		Login Successful
* 		CALL Password Change
* 	ELSE
* 		Login Failed.
* 	ENDIF

##Password Change
* GET EnteredUserName
* GET EnteredPassword
* IF (EnteredUsername == Username && EnteredPassword == Password) THEN
*   Sanitize (NewPassword)
*   IF (Sanitize returns EnteredUserName && EnteredPassword) THEN
*     change password
*   ELSE
*     Display error message
*   ENDIF
* ELSE
* 	Password Change Failed
* ENDIF


##Login 
* GET EnteredUserName
* GET EnteredPassword
* IF (EnteredUsername == Username && EnteredPassword == Password) THEN
* 	Set session cookie and enter site
*	ELSE
*		Display error message
*	ENDIF


##Sanitize
* IF (infoType == string)
* 	Remove whitespaces
* 	Remove ASCII characters <32 //FILTER_SANITIZE_STRING
* 	Remove ASCII characters >127
* 	Return info
* ELSE IF (infoType == float) //FILTER_SANITIZE_FLOAT
* 	Remove all characters except digits, +-.
* 	Return info
* ELSE IF (infoType == integer) //FILTER_SANITIZE_INT
* 	Remove all characters except digits, +-
* 	Return info
* ELSE
* 	Return infoType error
* ENDIF

##Securities Info
* do
* if there are result in mysql
* while(row  = result) //inner loop in if statement
* foreach(row as value) 
* printf() and echo <br/>
* while mysql has more results //end loop