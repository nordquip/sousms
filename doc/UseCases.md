##ID
WebGlossaryUC

###Actors
* User
* Website

###Description
User comes across an unfamiliar term while using the site

###Preconditions
* Successful log in
* Glossary successfully built


###Postconditions
* Successful - Glossary accessed and term defined
* Unsuccessful - Unable to access Glossary or find term

###Dialog
1. User finds unfamiliar term in course of using website
2. If term is linked, user is immediately taken to Glossary entry for term
3. If not linked, user accesses Glossary and manually searches for term

##ID
UCUserAccountsHelp

###Actors
* User
* Website

###Description
User requires information about using their sousms account.

###Preconditions
*User is an authorized user/member of the website
*User has logged into account
*Account help section has been created
*There is access to the help section for account holders

###Postconditions
*Successful ・Help section found and account question located
*Unsuccessful ・User unable to access/find help section and/or account question not found

###Dialog
1. User has a question about using the account
2. Website supplies access to account help section
3. User accesses the help section
4. Account help section has organized comprehensive list of account use questions
5. User finds answer to account use question 

##ID
TradeHelpUC

###Actors
* User
* Website

###Description
User may need help learning how trades work or troubleshooting while using the site

###Preconditions
* Successful log in
* FAQ written
* Trade guide written

###Postconditions
* Successful ? Help accessed and user finds needed information
* Unsuccessful ? Unable to access help

###Dialog
1. User needs to learn about trades or has a question about trading
2. User finds help section in navigation and opens dialog
3. User can read a FAQ to answer common questions
4. If user wants to learn how trades work, a step by step guide is also included
5. After finding the needed information, user can close the dialog and continue the session