-- Name: PotentialStoredProcedures 
-- Description: Here are some very rough draft Stored Procedures for the 3 listed in the
-- 		        team minutes. The third is far from being done, repeats code from earlier 
-- 		        stored procs instead of calling them (BAD, I know..). But perhaps could be 
--			    a starting point for us. Enjoy tearing them apart! I know I will... ;)
-- Note: These stored procs assume that the buffer table (UsrFeed) IS NOT implemented.
--       Stored Procedures based off of transactionsWithSubtypes.sql
-- Author: Martin Cole DeWitt
-- Date: 10/23/2012


-- Name: getCashFor
-- Parameters: UID = Particular Users Unique Identification Number
-- Description: This stored procedure accepts a single userID (UID)
--				And returns the current balance (CASH) for said user. 

Create Procedure getCashFor(
	IN UID int,
	OUT CASH decimal (9,2)
)
BEGIN
	Select Balance
	From Cash
	Where UserID = UID
	INTO CASH;
END;

-- Name: getCurrentPriceFor
-- Parameters: SYM = Unique Identifier For A Particular Company
-- Description: This stored procedure accepts a single symbol (SYM)
--				And returns the current trading value (PRICE) of said symbol.

Create Procedure getCurrentPriceFor(
	IN SYM char,
	OUT PRICE float (5,2)
)
BEGIN
	Select Price
	From Feed
	Where Symbol = SYM
	INTO PRICE;
END;

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
	OUT SUCCESS Boolean
BEGIN
	-- Declare variable for Users balance
	DECLARE userBalance float (9,2);
	-- Declare variable for symbols current price 
	DECLARE currPrice float (5,2);
	-- Declare variable for total cost (currPrice * NUM)
	DECLARE totalCost float (9,2);
	Set SUCCESS = '0';
	
	-- Get users balance and save in userBalance variable
	Call getCashFor(UID) INTO userBalance;
	
	-- Get current price and save in currPrice variable
	Call getCurrentPriceFor(SYM) INTO currPrice;
	
	-- Calculate Total and save in totalCost variable
	Select (currPrice*NUM) INTO totalCost
	
	--If the user can afford the purchase
	IF totalCost<=userBalance THEN
		SET SUCCESS = '1';
		--Insert transaction into the stock table (UID,Symbol,TStamp,SellBuy,Shares)
		INSERT into Stock VALUES(UID,SYM,Timestamp,SUCCESS,NUM);
		--Decrement Balance from Cash Table
		UPDATE Cash
		Set Balance = Balance - totalCost
		Where UserID = UID;
		--Set SUCCESS to 1
	END IF;
	--If the user could not afford the transaction, fail
	IF SUCCESS='0' THEN
		--EPIC FAIL!
		SET SUCCESS = '0';
	END IF
END;





