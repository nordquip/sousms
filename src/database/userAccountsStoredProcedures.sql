/*
	UA stored procedures
*/

/*
This Prodecure must:
1. Insert temporary password in the database
2. Return true (inserted) or false (failed)
*/
DROP PROCEDURE IF EXISTS insertTempPassword;
DELIMITER//
CREATE PROCEDURE insertTempPassword;
	IN email varchar(40)
	IN password varchar(40)
	
BEGIN
	DECLARE EXIT HANDLER for SQLWARNING BEGIN
		SELECT 'Unable to insert temporary password.' AS statusmsg;
	END;
	DECLARE EXIT HANDLER for SQLEXCEPTION BEGIN
		SELECT 'Unable to insert temporary password.' AS statusmsg;
	END;
	INSERT INTO User (Password) VALUES (password) WHERE User.Email = email;
END;
//
DELIMITER;


/*
This procedure must:
1. query database 
2. return numShares, price, symbol, transDate (transaction date) for the specified userID
*/
drop procedure if exists getTradeHistory;
DELIMITER//
create procedure getTradeHistory(
	IN UserID int(11),
	OUT Symbol char(5),
     	OUT Shares int(11),
     	OUT Price float(10,4),
	OUT TStamp timestamp not null,
	OUT SellBuy binary (1) not null,
	);

BEGIN
select Symbol, Shares, Price, TStamp, SellBuy
from Stock
where UserID = UserID;
end//
DELIMITER;

/*
This procedure must:
1. query database 
2. return numShares, price, symbol for the specified userID
*/
drop procedure if exists getTotalValue;
DELIMITER//
create procedure getTotalValue(
	IN UserID int(11),
	OUT Symbol char(5),
    OUT Shares int(11),
    OUT Price float(10,4),
	);

begin
select Symbol, Price
from Stock 
where UserID = UserID;
select Shares
from Portfolio
where UserID = UserID;
end//
DELIMITER;