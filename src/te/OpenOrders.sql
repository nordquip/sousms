/* OpenOrders table minus foreign keys, which will depend on the database
 *teams naming scheme.  
 *Written by Brittany Dighton, edited by Jeff Miller, Trade Engine
 */

DROP TABLE IF EXISTS OpenOrdersHistory;
DROP TABLE IF EXISTS OpenOrders;
DROP TABLE IF EXISTS OrderTypes;

CREATE TABLE OrderTypes (
	`typeID`	int(11)		NOT NULL AUTO_INCREMENT,
	`description`	varchar(50)	NOT NULL,
	PRIMARY KEY (`typeID`)
) ENGINE = InnoDB;

CREATE TABLE OpenOrders (
	`orderID`	int(11)		NOT NULL  AUTO_INCREMENT,
	`userID`	int(11)		NOT NULL,
	`symID`		int(11)		NOT NULL,
	`shares`	int(11)		NOT NULL,
	`orderType`	int(11)		NOT NULL,
	`price`		numeric(13,2)	NULL,
	`requestTime`	datetime	NOT NULL,
	PRIMARY KEY (`orderID`),
	CONSTRAINT `openorders_ordertype_FK` FOREIGN KEY (`orderType`)
		REFERENCES `OrderTypes` (`typeID`),
	CONSTRAINT `openorders_symbol_FK` FOREIGN KEY (`symID`)
		REFERENCES `Symbol` (`symID`)
) ENGINE = InnoDB;


INSERT INTO OrderTypes (description) VALUES ('Buy'), ('Sell');