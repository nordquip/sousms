
#Trading Engine Interfaces

## ID  IBuyStock
Written By NickolausDS

### Actors
* User Interface
* Database/Stock Market

### Description
* Buy stock for a single logged in user. This interface is expected to be called indirectly by the user through a user interface or by another script. As such it will check for bad parameter data.

### Preconditions
* User is logged in. 

### Post Conditions
* Success: Buy completes successfully
* Failure: Buy transaction does not go through.

### Input Parameters 
* UserID -- The id for the user who is buying stock.
* Stock Symbol -- The specific company for which we are buying stock.
* Stock Amount -- The amount of stock we are buying for the user.

### Returns
* An appropriate message (string) for success or failure.

