/*MySQL*/
DROP TABLE IF EXISTS `UserQuery`;
DROP TABLE IF EXISTS `Feed`;
DROP TABLE IF EXISTS `Portfolio`;
DROP TABLE IF EXISTS `Transaction`;
DROP TABLE IF EXISTS `User`;

/*Against my own wishes, I put bank information into the user table*/

CREATE TABLE IF NOT EXISTS `User` (
    `UserID` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `Password` CHAR(32) NOT NULL,
    `FName` VARCHAR(30) NOT NULL,
    `LName` VARCHAR(40) NOT NULL,
    `Email` VARCHAR(100) NOT NULL,
    `Balance` FLOAT(10, 2) NULL
)  ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `Login` (
    `Token` CHAR(32) PRIMARY KEY NOT NULL,
    `UserID` INT(11) NOT NULL,
    `LoginTime` DATETIME NOT NULL,
    `ExpTime` DATETIME NOT NULL,
    FOREIGN KEY (`UserID`)
        REFERENCES `User` (`UserID`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

/*Stores user transaction data. Initial amount is not sell or buy*/

CREATE TABLE IF NOT EXISTS `Transaction` (
    `TransID` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `UserID` INT(11) NOT NULL,
    `Amount` FLOAT(10, 2) NOT NULL,
    `Symbol` VARCHAR(20) NULL,
    `SymbolPrice` FLOAT(10, 2) NULL,
    `SellBuy` BOOLEAN NULL,
    `Shares` INT(11) NULL,
    `TransTime` DATETIME NOT NULL DEFAULT 0,
    FOREIGN KEY (`UserID`)
        REFERENCES `User` (`UserID`)
        ON UPDATE NO ACTION
)  ENGINE=InnoDB;

/*Stores users current stock holdings */

CREATE TABLE IF NOT EXISTS `Portfolio` (
    `UserID` INT(11) NOT NULL,
    `Symbol` VARCHAR(20) NOT NULL,
    `DateModified` DATETIME NOT NULL DEFAULT 0,
    `Shares` INT(11) NOT NULL,
    PRIMARY KEY (`UserID`, `Symbol`),
    FOREIGN KEY (`UserID`)
        REFERENCES `Transaction` (`UserID`)
        ON UPDATE CASCADE
)  ENGINE=InnoDB;

/*
Hoping to find a more efficient way to do this... however...
We are thinking of perhaps having a "feed dumping" table called Feed (this is constantly being populated by the feed)
as well as a table for users to query (holds most current values of our 40 symbols.. perhaps updating every 40 seconds?) for price checking, purchasing, etc.
Lets see if we can find a more efficient way.....?
*/

CREATE TABLE IF NOT EXISTS `Feed` (
    `Symbol` VARCHAR(20),
    `TS` TIMESTAMP,
    `BestAskPrice` FLOAT(5, 2) NOT NULL,
    `BestAskQty` FLOAT(5, 2) NOT NULL,
    `BestBidPrice` FLOAT(5, 2) NOT NULL,
    `BestBidQty` FLOAT(5, 2) NOT NULL,
    `Close` FLOAT(5, 2) NOT NULL,
    `High` FLOAT(5, 2) NOT NULL,
    `Date` TIMESTAMP NOT NULL,
    `LastSale` FLOAT(5, 2) NOT NULL,
    `Low` FLOAT(5, 2) NOT NULL,
    `NetChg` FLOAT NOT NULL,
    `Open` FLOAT NOT NULL,
    `Pcl` FLOAT NOT NULL,
    PRIMARY KEY (`Symbol`, `TS`)
)  ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `UserQuery` (
    `Symbol` VARCHAR(20) PRIMARY KEY,
    `TS` TIMESTAMP NOT NULL,
    `UserID` INT(11) NOT NULL,
    `BestAskPrice` FLOAT(5, 2) NOT NULL,
    `BestAskQty` FLOAT(5, 2) NOT NULL,
    `BestBidPrice` FLOAT(5, 2) NOT NULL,
    `BestBidQty` FLOAT(5, 2) NOT NULL,
    `Close` FLOAT(5, 2) NOT NULL,
    `High` FLOAT(5, 2) NOT NULL,
    `Date` TIMESTAMP NOT NULL,
    `LastSale` FLOAT(5, 2) NOT NULL,
    `Low` FLOAT(5, 2) NOT NULL,
    `NetChg` FLOAT NOT NULL,
    `Open` FLOAT NOT NULL,
    `Pcl` FLOAT NOT NULL,
    FOREIGN KEY (`UserID`)
        REFERENCES `User` (`UserID`)
        ON UPDATE NO ACTION
)  ENGINE=InnoDB;
