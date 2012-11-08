-- Name: Create Table(s) -- TransactionWithSubtypes
-- Description: Split the Transaction table into two 
--				inclusive subtypes: Stock (for trading of stock) 
--				and Cash (for deposits and trading of stock)
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