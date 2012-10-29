#Kuhl 469Database
DROP TABLE IF EXISTS HOLDING;
DROP TABLE IF EXISTS TRANSACTION;
DROP TABLE IF EXISTS USR;
DROP TABLE IF EXISTS FEED;

CREATE TABLE FEED( 
feedID         int not null,
bestAskPrice    decimal(10,4)    not null,
bestAskQty      int             not null,
bestBidPrice    decimal(10,4)    not null,
bestBidQty      int             not null,
close           decimal(10,4),
high            decimal(10,4)    not null,
date            DATE       not null,
time            TIME       not null,
ms              decimal(3,3)    default 0,
symbol          char(10)        not null,
lastSale        decimal(10,4)    not null,
low             decimal(10,4)    not null,
netChg          decimal(10,4)    not null,
open            decimal(10,4)    not null,
pcl             decimal(10,4)    not null,
vol             decimal(10,4)    not null,
pctChg          decimal(10,8)    not null,
CONSTRAINT SYMBOL_PK PRIMARY KEY(feedID)
);

CREATE TABLE USR(
userID int not null,
lName   char(10) not null,
fNmae   Char(10) not null,
email   varchar(30) not null,
passWord    varchar(30) not null,
token       varchar(100),
login   TIME,
expire  TIME,
CONSTRAINT USERID_PK PRIMARY KEY(userID)
);

CREATE TABLE TRANSACTION(
transID int not null,
userID  int not null,
feedID  int not null,
tAmount decimal(10,4),
CONSTRAINT TRANSID_PK PRIMARY KEY(transID),
CONSTRAINT USERID_FK FOREIGN KEY(userID)
    REFERENCES USR (userID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
CONSTRAINT FEED_FK FOREIGN KEY(feedID)
    REFERENCES FEED (feedID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE HOLDING(
holdingID   int not null,
transID      int,
numShares   int not null,
CONSTRAINT HOLDINGID_PK PRIMARY KEY(holdingID),
CONSTRAINT TRANSACTION_FK FOREIGN KEY(transID)
    REFERENCES TRANSACTION (transID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
insert into FEED values(
1, 12, 5, 11.0, 5, 11.5, 12.5, '2012-12-31', '18:28:22',.333, 'Intel', 3, 2, 13, 7, 4, 10,8);

insert into USR values(
2, 'Kuhl', 'Keith', 'tic','tac','toe','14:00:01','18:28:22');

insert into TRANSACTION VALUES(
9,2,1,9);

INSERT INTO HOLDING VALUES(
33,9,200);

