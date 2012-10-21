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
* IF (UserName != defaultUserName)
* Remove whitespaces
* Remove ASCII characters <32 (FILTER_SANITIZE_STRING)
* Remove ASCII characters >127
* Return UserName
* ELSE
* Return defaultUserName (should trigger error in Validation stage)
* 
* IF (InputFloat != defaultInputFloat)
* Remove all characters except digits, +-.
* Return InputFloat
* ELSE
* Return defaultInputFloat (should trigger some error where ever)
* 
* IF (InputInt != defaultInputInt)
* Remove all characters except digits, +-
* Return InputInt
* ELSE
* Return defaultInputInt (error)
* 
