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

##Validation
* IF (UserName == EnteredUserName && Passwork == EnteredPassword) Then
* Set session cookie and enter site
* ELSE
* Display error message
* ENDIF
