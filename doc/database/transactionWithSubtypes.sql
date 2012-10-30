-- Name: Create Table(s) -- TransactionWithSubtypes
-- Description: Split the Transaction table into two 
--				inclusive subtypes: Stock (for trading of stock) 
--				and Cash (for deposits and trading of stock)
-- Note: This assumes that current portfolio functionality will not
--	     be included in first release.
-- Author: Martin Cole DeWitt
-- Date: 10/23/2012


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

/*Stores user transaction data (Pertaining to stocks)*/
CREATE TABLE IF NOT EXISTS Stock(
	UserID int not null,
	Symbol char (5) not null,
	TStamp timestamp not null,
	SellBuy binary (1) not null,
	Shares int not null,
	Primary Key (UserID, Symbol),
	Foreign Key (UserID) References User(UserId)
		on update no action
)ENGINE = InnoDB;

/*Stores users current Balance*/
CREATE TABLE IF NOT EXISTS Cash(
	UserID int not null,
	Balance float(9,2) not null,
	Primary Key(UserID, Balance),
	Foreign Key (UserID) References User(UserID)
)ENGINE = InnoDB;

/*Stores Feed Information*/
CREATE TABLE IF NOT EXISTS Feed(
	Symbol char (5) not null,
	Price float (5,2) not null,
	TS timestamp not null,
	BestAskPrice float(5,2) not null,	
	BestAskQty float(5,2) not null,
	BestBidPrice float (5,2) not null,	
	BestBidQty float(5,2) not null,
Close float (5,2) not null,
	High float(5,2) not null,			
	Date timestamp not null,
	LastSale float (5,2) not null,		
	Low float(5,2) not null,			
	NetChg float (5,2) not null,			
	Open float (5,2) not null,			
	Pcl float (5,2) not null,
	Index (Symbol)
)Engine = InnoDB;




