#User Account Use Cases					

##Authenticate
###Actor
*User
###Description						
*Login
*Register w/website
###Preconditions				
*Access to website
###Post Conditions				
*Actor has information to register if 1st time
###Dialog						
1. The system displays prompts for the Customer ID and Customer password; The LOGIN button is displayed with a Register Button.
2. Customer enters the Customer ID.
3. Customer enters the Customer Password.
4. Customer presses the LOGIN button
5. The system locates the Customer’s Customer object
6. The system verifies the Customer’s access rights
7. The system displays the overview of Customer’s accounts,including the acct#, balance as of today
###Alternative Paths			
1.	1st Time customer clicks Register button.
2.	The system displays registration page prompts for Customer ID and Password. Also a Register button.
3.	Customer enters desired User Name.
4.	Customer enters desired password. 
5.	Customer presses Register button.
6.	The system creates Customer’s Customer object.
7.	The system displays login page. 

##Validation
###Actor
*User
###Description
*The user enters credentials, username and password, for verification and entry into the secure site
###Precondition
* User has already established user account
###Postcondition
* User enters secure site,successful
* User account is locked, unsuccessful
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
2. User answers security question and clicks submit
3. Answer is compared to information stored in database
4. Answer is verified
5. User enters and confirms new password
6. Password is verified and stored in the database
7. User enters correct credentials, return to original path step 2
