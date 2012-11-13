/* 
 * Lists headers of, and/or information on, stored procedures needed by 
 * the Trade Engine team.
 */

-- sp_symbolToSymID
-- Converts a symbol to a symbol ID.
DROP PROCEDURE IF EXISTS sp_symbolToSymID;
DELIMITER //
CREATE PROCEDURE `sp_symbolToSymID` (
	stockSymbol varchar(8)
)
BEGIN
	SELECT symID FROM Symbol WHERE Symbol.symbol = stockSymbol;
END;
//

DELIMITER ;

-- sp_insertSell
DROP PROCEDURE IF EXISTS sp_insertSell;
DELIMITER //
CREATE PROCEDURE `sp_insertSell` (
	IN userID_in  int(11),
	IN symbolID_in  int(11),
	IN shares_in int(11),
	IN price_in  numeric(13,2)
)
BEGIN
	INSERT INTO OpenOrders (userID, symID, shares, orderType, price, requestTime) 
		VALUES (userID_in, symbolID_in, shares_in,
		(SELECT `typeID` FROM OrderTypes WHERE `description` LIKE 'Sell'), 
		price_in, NOW());
	SELECT 'Your trade has been queued' AS statusmsg;
END;
//

DELIMITER ;

-- sp_getShareBalance
-- this stored procedure still needs some tweaking - it does not successfully return the result set
DROP PROCEDURE IF EXISTS sp_getShareBalance;
DELIMITER //
CREATE PROCEDURE `sp_getShareBalance` (
	IN userID_in  int(11),
	IN stockSymbol_in  varchar(8)
)
BEGIN
	SELECT `Shares` FROM Portfolio  
		WHERE `UserID` = userID_in 
		AND `SymID` IN (
			SELECT `SymID` FROM Symbol 
			WHERE  `Symbol` = stockSymbol_in
		);
END;
//

DELIMITER ;

-- sp_getAllOpenOrders
DROP PROCEDURE IF EXISTS sp_getAllOpenOrders;
DELIMITER //
CREATE PROCEDURE `sp_getAllOpenOrders` ()
BEGIN
	-- Returns all records of the OpenOrders table
	SELECT  openorders.orderID,
			openorders.userID, 
			openorders.symID, 
			symbol.symbol,
			openorders.shares,
			openorders.orderType,
			ordertypes.description AS typedesc,
			openorders.price
		FROM openorders
			JOIN symbol ON openorders.symID = symbol.symID
			JOIN ordertypes ON openorders.orderType = ordertypes.typeid
		ORDER BY orderID;
END;
//

DELIMITER ;

-- sp_deleteOpenOrder
-- deletes the record corresponding to orderID from OpenOrders
DROP PROCEDURE IF EXISTS sp_deleteOpenOrder;
DELIMITER //
CREATE PROCEDURE `sp_deleteOpenOrder` (orderID INT)
BEGIN
	DELETE FROM openorders WHERE openorders.orderID = orderID;
END;
//

DELIMITER ;

-- sp_getUserIdFromToken
DROP PROCEDURE IF EXISTS sp_getUserIdFromToken;
DELIMITER //
CREATE PROCEDURE `sp_getUserIdFromToken`(
	token char(32)
)
BEGIN
	DECLARE lnUserID INT;
	DECLARE ldExpireTime TIMESTAMP;
	DECLARE loginCursor CURSOR FOR SELECT UserID, EndTS FROM login
		WHERE logins.token = token;
	DECLARE EXIT HANDLER FOR NOT FOUND BEGIN
		SELECT -1 AS userid, 'The login was not found' AS statusmsg;
	END;
	OPEN loginCursor;
	FETCH loginCursor INTO lnUserID, ldExpireTime;
	CLOSE loginCursor;
	IF ldExpireTime > NOW() THEN
		SELECT lnUserID AS userid, '' AS statusmsg; 
	ELSE
		SELECT -1 AS userid, 'The login expired' AS statusmsg; 
	END IF;
END;
//

DELIMITER ;

-- sp_insertBuy
-- Nov 5, 2012 Created By Jeff Karmy, with Jeff Miller's help
DROP PROCEDURE IF EXISTS sp_insertBuy;
DELIMITER //
CREATE PROCEDURE `sp_insertBuy` (
	IN userID int,
	IN symbolID int,
	IN shares int,
	IN price numeric(13,2)
)
BEGIN
	INSERT INTO OpenOrders (userID, symID, shares, orderType, price, requestTime)
	VALUES (userID, symbolID, shares, (SELECT typeID FROM OrderTypes WHERE description LIKE 'Buy'), price, NOW());
	SELECT 'Your trade has been queued' AS statusmsg;
END;
//

DELIMITER ;

-- sp_getCash
-- returns user's cash
DROP PROCEDURE IF EXISTS sp_getCash;
DELIMITER //
CREATE PROCEDURE `sp_getCash` (
	userID INT
)
BEGIN
	SELECT SUM(balance) AS totalbalance FROM cash WHERE cash.userID = userID;
END;
//

DELIMITER ;

-- sp_getPrice
-- returns latest stock price
DROP PROCEDURE IF EXISTS sp_getPrice;
DELIMITER //
CREATE PROCEDURE `sp_getPrice` (
	symID INT
)
BEGIN
	SELECT bestAskPrice AS price
	FROM feed
		JOIN symbol ON symbol.symbol = feed.symbol
	WHERE symbol.symID = symID
	ORDER BY feed.date DESC,
		feed.time DESC
	LIMIT 1;
END;
//

DELIMITER ;

-- sp_buy
-- executes "buy" behavior for given order ID:
--   inserts negative balance (-1 * current price * number of shares) into "cash" table for given user
--   inserts into stock holdings (userID, symID) if not exists
--   updates stock holdings (shares, datemodified) in "portfolio" table for (userID, symID)
--   deletes order for given order ID
--   rolls back changes if any failures
--   reports success status
DROP PROCEDURE IF EXISTS sp_buy;
DELIMITER //
CREATE PROCEDURE `sp_buy` (
	openOrderID INT
)
BEGIN
	
END;
//

DELIMITER ;

-- sp_sell
DROP PROCEDURE IF EXISTS sp_buy;
DELIMITER //
CREATE PROCEDURE `sp_buy` (
	openOrderID INT
)
BEGIN
	
END;
//

DELIMITER ;

