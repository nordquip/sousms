#Interface Specifications

##Buy:
###Parameters: A symbol and a number of shares
###Return: Confirmation of successful purchase

##Sell:
###Parameters: A symbol and a number of shares
###Return: Notification that stocks were sold when a buyer is found

##getQuoteFor(symbol):
###Description: Gets quote for a particular symbol
###Parameters: Symbol and current price
###Return: Display lookup results to user

##Settings:
###Parameters: Needs user account information and ability to make and save changes
###Return: Confirmation of changed settings and saving of new settings

##FAQ:
###Parameters: FAQ
###Return: Display FAQ

## Login:
###Parameters: Sends Username and Password to database for authentication
###Return: True or false

## ReclaimPassword:
###Parameters: Sends First Name, Last Name and E-mail to database for authentication
###Return: Message of not found or email sent.
