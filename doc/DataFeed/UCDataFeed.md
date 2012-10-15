# Data Feed Use Case

###ID
UCDataFeed

###Actors
Data Feed, Database

###Description
Data feed sends ticker data to be stored in the db

###Preconditions: 
* Data feed ordered and functional. 
* Database created.
               
###Postconditions: 
* Symbol data stored in database. (successful)
* Data not retained. (unsuccessful)

###Dialog
1. Data feed provides ticker data via XML
2. SMS attempts to parse data and store in db
3. If parse unsuccessful display error and back to 1
                
                
