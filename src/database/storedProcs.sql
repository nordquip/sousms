-- Name: getPortfolio
-- Author: Emily!
-- Parameters: UserID
-- Description: Returns portfolio based off of user's identification number.

DROP PROCEDURE IF EXISTS getPortfolio;
DELIMITTER //
CREATE PROCEDURE getPortfolio(
@ UserID
)
AS
BEGIN	
SELECT p.symbol, p.numberShares, f.bestAskPrice
FROM portfolio p, feed f
WHERE UserID = @UserID;
END//
Delimiter;

-- Name: getTradeHistory
-- Author: Josh Carroll
-- Parameters: UID = Particular Unigue Users ID
-- Description: Stored procudure accepts a single UserID (UID) 
--		and returns the Symbol, number of Shares, and Price of Shares.

DROP PROCEDURE IF EXISTS getTradeHistory;
Delimiter //
CREATE PROCEDURE getTradeHistory(
    IN UID int,
    OUT Symbol char(5),
    OUT Shares int(11),
    OUT Price float(10,4)
)
BEGIN 
    SELECT Symbol, Shares, Price
    FROM stock
    WHERE UserID=UID
    INSERT INTO trade history (SYMBOL, SHARES, PRICE);
END//
Delimiter ;

-- Name: buy
-- Author: Martin DeWitt
-- Parameters: UID = Particular Users Unique Identification Number
--			   SYM = Unique Identifier For A Particular Company
--			   NUM = Number Of Shares to Purchase
-- Description: This stored procedure accepts 4 parameters: UID (UserID), 
--				SYM (Symbol), and NUM (Number of Shares), as well as Purchase Price.
-- 				Returns Boolean of 0 if successful, 1 if not successful.

Drop Procedure if exists buy;
Delimiter //
Create Procedure buy(
	in Uid int,
	in Sym char,
	in Num int,
	in Prc float,
	out Success Boolean
)
Begin
	Declare symId int;
	Declare totalCost float;
	Declare usrBalance float;
	set totalcost=Num*Prc;
	Select SymID from Symbol Where Symbol=Sym into symId;
	Select Balance From Cash Where UserID=Uid Into usrBalance;
	If usrBalance>=totalCost Then
		Set Success='0';
		Insert into Stock (UserID, SymID, SellBuy, Shares, Price) Values (Uid, symId, Success, Num, totalCost);
		Update Cash Set Balance=Balance-totalCost where UserID=Uid;
	Else
		Set Success='1';
	End If;
End //
Delimiter ;

-- Name: sell
-- Author: Scott Williams
-- Parameters: UserID (UID), Symbol (SYM), Number of shares (NUM), and 
--			   Purchase price (PRC)
-- Description: Sells shares of a users current holdings.

Delimiter //
CREATE PROCEDURE sell()

IN UID int,
IN SYM varchar(5),
IN NUM int,
IN PRC float(10,4),

BEGIN
	--sets success. 
	SET yes = 1;
	SET complete = 1;
	
	--checks if user has stock to sell.
	SELECT symbol 
	FROM portfolio
		IF (symbol == SYM)THEN
			yes = 0;
		ELSE
			yes = 1;
	WHERE userID = UID;
			
	--checks the curent price of stock.
	SELECT LastSale
	FROM feed;
	
	--removes the stock from portfolio after sold.
	DELETE FROM portfolio
	WHERE symbol == SYM
	AND userID = UID;
	
	--adds amount of sale to balance.
	UPDATE cash
	SET balance = LastSale + PRC
	WHERE userID = UID;

	complete = 0;
END//

DELIMITTER;

-- Name: getToken
-- Author: Keith Kuhl
-- Parameters: UserID
-- Description: Returns current token number
DROP PROCEDURE IF EXISTS `getToken`;
DELIMITER //
CREATE PROCEDURE `getToken`(
    IN UserID int,
    IN Passwords varchar(40),
    IN Token varchar(32)
)
BEGIN
    INSERT INTO LOGIN (Token)
    Values (Token);
END //
DELIMITER ;




