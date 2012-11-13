-- Name: getPortfolio
-- Author: Emily!
-- Parameters: UserID
-- Description: Returns portfolio based off of user's identification number.

DELIMITTER //

DROP PROCEDURE IF EXISTS getPortfolio;

CREATE PROCEDURE getPortfolio(
@ UserID
)
AS
BEGIN	
SELECT p.symbol, p.numberShares, f.bestAskPrice
FROM portfolio p, feed f
WHERE UserID = @UserID;
END//

-- Name: getTradeHistory
-- Author: Josh Carroll
-- Parameters: UID = Particular Unigue Users ID
-- Description: Stored procudure accepts a single UserID (UID) 
--		and returns the Symbol, number of Shares, and Price of Shares.

DROP PROCEDURE IF EXISTS getTradeHistory;

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

-- Name: buy
-- Author: Martin DeWitt
-- Parameters: UID = Particular Users Unique Identification Number
--			   SYM = Unique Identifier For A Particular Company
--			   NUM = Number Of Shares to Purchase
-- Description: This stored procedure accepts 4 parameters: UID (UserID), 
--				SYM (Symbol), and NUM (Number of Shares), as well as Purchase Price.
-- 				Returns Boolean of 0 if successful, 1 if not successful.

Create Procedure buy(
	IN UID int, 			/*UserID*/
 	IN SYM char,			/*Symbol To Purchase*/
	IN NUM int,				/*Number of Shares*/
	IN PRC float,			/*Purchase Price*/
	OUT SUCCESS Boolean 	/*0=Success, 1=Fail*/
)
Begin
	/*Declare Variables Needed*/
	--totalCost
	Declare totalCost float (10,4);
	--usrBalance
	Declare usrBalance float (10,4);
	/*Calculate Total, store in totalCost variable*/
	Set totalCost=NUM*PRC;
	/*Can User Afford?*/
	Select Balance From Cash Where UserID=UID Into usrBalance;
	If usrBalance>=totalCost Then
		Set SUCCCESS='0';
		--Insert Transaction into stock table ie insert
		Insert into Stock (UserID, SellBuy, Shares, Price) values (UID, SUCCESS, NUM, totalCost);
		--Decrement 'Balance' in 'Cash' table ie update
		Update Cash Set Balance=Balance-totalCost Where UserID=UID;
	Else
		Set SUCCESS='1';
	End If;
End//

-- Name: sell
-- Author: Scott Williams
-- Parameters: UserID (UID), Symbol (SYM), Number of shares (NUM), and 
--			   Purchase price (PRC)
-- Description: Sells shares of a users current holdings.

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

DELIMITER //
CREATE PROCEDURE getToken()
BEGIN
select Token
from LOGIN;
END //
DELIMITER ;





