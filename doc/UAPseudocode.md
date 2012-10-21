#Pseudocode
##Password Recovery
* IF (UserName == EnteredUserName) Then
* New Password Sent to registered email
* ELSE
* UserName Failed
* ENDIF

##Initial Account Access
* GET Username
* GET Password
* IF (Username == EnteredUsername && Password == EnteredPassword) THEN
* Login Successful
* Password Changed to new Password
* ELSE
* Login Failed.
* ENDIF

##Password Change
* IF (UserName == EnteredUserName && Password == EnteredPassword) Then
* Enter New Password
* ELSE
* Password Change Failed
* ENDIF

##Validate
* IF (UserName == EnteredUserName && Password == EnteredPassword) Then
* Set session cookie and enter site
* ELSE
* Display error message
* ENDIF

##Sanitize
* IF (infoType == string)
* Remove whitespaces
* Remove ASCII characters <32 //FILTER_SANITIZE_STRING
* Remove ASCII characters >127
* Return info
* ELSE IF (infoType == float) //FILTER_SANITIZE_FLOAT
* Remove all characters except digits, +-.
* Return info
* ELSE IF (infoType == integer) //FILTER_SANITIZE_INT
* Remove all characters except digits, +-
* Return info
* ELSE
* Return infoType error
* ENDIF
