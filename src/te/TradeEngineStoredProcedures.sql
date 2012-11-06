/* 
 * Lists headers of, and information on, stored procedures needed by 
 * the Trade Engine team.
 */


insertSell(
	IN userID  int(11),
	IN stockSymbol  varchar(50),
	IN numShares int(11),
	IN price  numeric(13,2)
	)
	/*INSERT INTO OpenOrders (userID, stockSymbol, shares, orderType, price, requestTime) 
		VALUES (userID, stockSymbol, shares,
		(SELECT `typeID` FROM OrderTypes WHERE `description` LIKE 'Sell'), 
		price, NOW());
		*/

getShareBalance(
	IN userID	int(11),
	IN stockSymbol	varchar(50)
	)
	-- Returns the user's holdings of the specified symbol
	
getAllOpenOrders()
	-- Returns userID, stockSymbol, shares, orderType, price from all records of the OpenOrders table
	-- then deletes these records from OpenOrders
	
