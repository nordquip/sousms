DELIMITTER //

DROP PROCEDURE IF EXISTS getPortfolio;

CREATE PROCEDURE getPortfolio(
@ UserID
)
AS
BEGIN	
SELECT p.symbol, p.numberShares, f.bestAskPrice
FROM portfolio p, feed f
WHERE UserID = @UserID
END
//

-- Name: getCashFor
-- Parameters: UID = Particular Users Unique Identification Number
-- Description: This stored procedure accepts a single userID (UID)
--				And returns the current balance (CASH) for said user. 

Create Procedure getCashFor(
	IN UID int
	OUT CASH float (10,4)
)
BEGIN
	Select Balance
	From Cash
	Where UserID = UID
	INTO CASH;
END;
//
-- Stored Procedure created by Josh Carroll
-- Name: getTradeHistory
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
END;

//

-- Name: buy
-- Parameters: UID = Particular Users Unique Identification Number
--			   SYM = Unique Identifier For A Particular Company
--			   NUM = Number Of Shares to Purchase
-- Description: This stored procedure accepts 3 parameters: UID (UserID), 
--				SYM (Symbol), and NUM (Number of Shares). Returns Boolean 
--				of true of successful, false if not successful.

Create Procedure buy(
	IN UID int,
	IN SYM char,
	IN NUM int,
	IN PRC float,
	OUT SUCCESS Boolean
BEGIN
	-- Declare variable for Users balance
	DECLARE userBalance float (10,4);
	-- Declare variable for total cost (currPrice * NUM)
	DECLARE totalCost float (10,4);
	Set SUCCESS = '1';
	
	-- Get users balance and save in userBalance variable
	Call getCashFor(UID) INTO userBalance;
	
	set totalCost = PRC * NUM;
	
	--If the user can afford the purchase
	IF totalCost<=userBalance THEN
		SET SUCCESS = '0';
		--Insert transaction into the stock table (UID,Symbol,TStamp,SellBuy,Shares)
		Insert (UID, SYM, SUCCESS, NUM, totalCost)
		--Decrement Balance from Cash Table
		UPDATE Cash
		Set Balance = Balance - totalCost
		Where UserID = UID;
	END IF;
	--If the user could not afford the transaction, fail
	IF SUCCESS='0' THEN
		--EPIC FAIL!
		SET SUCCESS = '1';
	END IF
END;
//

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
END //

DELIMITTER;




