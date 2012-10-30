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