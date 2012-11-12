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
END

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