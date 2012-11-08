-- Name: Create Table(s) -- TransactionWithSubtypes
-- Description: Split the Transaction table into two 
--				inclusive subtypes: Stock (for trading of stock) 
--				and Cash (for deposits and trading of stock)
-- Author: Martin Cole DeWitt
-- Date: 10/23/2012
/*
Tried adding the command at the end of src/database/sousmsDeclareTables.sql to source in initUserAndTransactionTables.sql using the following without success:

source initUserAndTransactionTables.sql
\. initUserAndTransactionTables.sql
source C:/Users/dewittm/Documents/GitHub/sousms/src/database/initUserAndTransactionTables.sql
\. C:/Users/dewittm/Documents/GitHub/sousms/src/database/initUserAndTransactionTables.sql
source initUserAndTransactionTables.sql;
\. initUserAndTransactionTables.sql;
source C:/Users/dewittm/Documents/GitHub/sousms/src/database/initUserAndTransactionTables.sql;
\. C:/Users/dewittm/Documents/GitHub/sousms/src/database/initUserAndTransactionTables.sql;

Also, the if statement creating the conditional feed table threw errors that I could not debug. So to get rid of the "hot potato", we deleted the if statement, along with the procedure to create the feed table, along with moving all tables from initUserAndTransactionTables.sql to sousmsDeclareTables.sql to simplify the initialization process. 

With this route, the sousmsDeclareTables.sql script to initialize the database runs without error.

*/

/*Create and use sousms*/
create database if not exists sousms;
use sousms;

/*Stores User Data*/
CREATE TABLE IF NOT EXISTS User(
	UserID int auto_increment,
	Password varchar (40) not null,
	Fname char (20) not null,
	Lname char (20) not null,
	Email varchar (40) not null,
	Phone varchar (20) not null,
	PRIMARY KEY (UserID)
)ENGINE = InnoDB;
	
/*Login Data*/
CREATE TABLE IF NOT EXISTS Login(
	UserID int not null,
	Token varchar (32) not null,
	begTS timestamp not null,
	endts timestamp not null,
	PRIMARY KEY (Token, begTS),
	Foreign key (UserID) References User(UserID)
)ENGINE = InnoDB;

/*Stores user transaction data (Pertaining to stocks)*/
CREATE TABLE IF NOT EXISTS Stock(
	UserID int not null,
	Symbol char (5) not null,
	TStamp timestamp not null,
	SellBuy binary (1) not null,
	Shares int not null,
	Price float (5,2) not null,
	Primary Key (UserID, Symbol),
	Foreign Key (UserID) References User(UserId)
		on update no action
)ENGINE = InnoDB;

/*Stores users current Balance*/
CREATE TABLE IF NOT EXISTS Cash(
	UserID int not null,
	Balance float(9,2) not null,
	TStamp timestamp not null,
	Primary Key(UserID, Balance),
	Foreign Key (UserID) References User(UserID)
)ENGINE = InnoDB;

/*Stores users current holdings*/
CREATE TABLE IF NOT EXISTS Portfolio(
	UserID int not null,
	Symbol char (5) not null,
	DateModified timestamp not null,
	Shares int not null,
	Primary Key(UserID, Symbol),
	Foreign Key (UserID, Symbol) References Stock(UserID, Symbol)
		on update cascade
)Engine=InnoDB;

 create table Feed(
            symbol          char(8)         not null,
            bestAskPrice    decimal(10,4)   not null, 
                -- The format says: $$$$$$.dddd, which is 10,4 not 7,2
                -- copy the format and field names of the feed exactly
            bestAskQty      int             not null,
            bestBidPrice    decimal(10,4)   not null,
            bestBidQty      int             not null,
            close           decimal(10,4),     -- close can be null
            high            decimal(10,4)   not null,
            date            date            not null,
            time            time            not null,  
                -- (stores only down to the second,
                -- so store ms in the next field)
            ms              decimal(3,3)    not null,
            lastSale        decimal(10,4)   not null,
            low             decimal(10,4)   not null,
            netChg          decimal(10,4)   not null,
            open            decimal(10,4)   not null,
            pcl             decimal(10,4)   not null,
            vol             int             not null,
            pctChg          decimal(10,8)   not null,  
                -- pctChg was specified as numeric(11) by NASDAQ,
                -- which is the same precision
                -- as the others whose format was decimal(10,4), 
                -- so we can probably get away with decimal(10,8)
            CONSTRAINT FEED_PK PRIMARY KEY(date,time,ms),
                -- Keep the table in chronological order --
                -- these 3 fields are unique:
                -- every record from the feed has a different time stamp
            INDEX(symbol)
                -- need an index on symbol,
                -- so we can find group by symbol quickly
        ) ENGINE=INNODB;