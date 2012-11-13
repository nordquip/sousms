/*
OpenOrdersHistory table and logging trigger
Written by Jeff Miller, Trade Engine
*/

DROP TRIGGER IF EXISTS LogOrders;
DROP TABLE IF EXISTS OpenOrdersHistory;

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
