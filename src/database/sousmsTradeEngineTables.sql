/* OpenOrders table minus foreign keys, which will depend on the database
 *teams naming scheme.  
 *Written by Brittany Dighton, edited by Jeff Miller, Trade Engine
 */

DROP TRIGGER IF EXISTS LogOrders;
DROP TABLE IF EXISTS OpenOrdersHistory;
DROP TABLE IF EXISTS OpenOrders;
DROP TABLE IF EXISTS OrderTypes;

CREATE TABLE IF NOT EXISTS OrderTypes (
	`typeID`	int(11)		NOT NULL AUTO_INCREMENT,
	`description`	varchar(50)	NOT NULL,
	PRIMARY KEY (`typeID`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS OpenOrders (
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

/*
OpenOrdersHistory table and logging trigger
Written by Jeff Miller, Trade Engine
*/
CREATE TABLE IF NOT EXISTS OpenOrdersHistory (
	`historyID`	int(11)		NOT NULL AUTO_INCREMENT,
	`orderID`	int(11)		NOT NULL,
	`userID`	int(11)		NOT NULL,
	`symID`		int(11)		NOT NULL,
	`shares`	int(11)		NOT NULL,
	`orderType`	int(11)		NOT NULL,
	`price`		numeric(13,2)	NULL,
	`requestTime`	datetime	NOT NULL,
	PRIMARY KEY (`historyID`),
	CONSTRAINT `openordershistory_ordertype_FK` FOREIGN KEY (`orderType`)
		REFERENCES `OrderTypes` (`typeID`),
	CONSTRAINT `openordershistory_symbol_FK` FOREIGN KEY (`symID`)
		REFERENCES `Symbol` (`symID`)
) ENGINE = InnoDB;

delimiter //
CREATE TRIGGER LogOrders AFTER INSERT ON OpenOrders
	FOR EACH ROW
	BEGIN
		INSERT INTO OpenOrdersHistory
		(orderID, userID, symID, shares, orderType, price, requestTime)
		VALUES
		(NEW.orderID, NEW.userID, NEW.symID, NEW.shares, NEW.orderType, NEW.price, NEW.requestTime);
	END;
//
delimiter ;
