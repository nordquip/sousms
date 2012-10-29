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
* Account help section has been created
* There is access to the help section for account holders

###Postconditions
* Successful - Information about using account located
* Unsuccessful - User unable to find answer to account use question

###Dialog
1. User selects from a list of help topics
2. System returns user's topic choice
3. User selects help item from list inside topic choice
4. System returns help topic
5. If help topic not found user enters search term in dialog box
6. System returns list of possible matches for help topic

##ID
TradeHelpUC

###Actors
* User
* Website

###Description
User may need help learning how trades work or troubleshooting while using the site

###Preconditions
* Successful log in
* FAQ present
* Trade guide present

###Postconditions
* Successful ? Help accessed and user finds needed information
* Unsuccessful ? User cannot get the help that they wanted

###Dialog
1. User finds help section in navigation and opens dialog
2. User can read a FAQ to answer common questions by selecting from a topic list
3. User can learn how trades work by following a step by step guide
4. User finds information and can continue session