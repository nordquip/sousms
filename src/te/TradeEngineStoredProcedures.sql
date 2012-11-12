/* 
 * Lists headers of, and/or information on, stored procedures needed by 
 * the Trade Engine team.
 */


-- sp_insertSell
delimiter //
CREATE PROCEDURE sp_insertSell(
	IN userID_in  int(11),
	IN stockSymbol_in  varchar(50),
	IN shares_in int(11),
	IN price_in  numeric(13,2)
	)
	
BEGIN

INSERT INTO OpenOrders (userID, stockSymbol, shares, orderType, price, requestTime) 
	VALUES (userID_in, stockSymbol_in, shares_in,
	(SELECT `typeID` FROM OrderTypes WHERE `description` LIKE 'Sell'), 
	price_in, NOW());
END;
//

delimiter ;

-- sp_getShareBalance
DROP PROCEDURE IF EXISTS sp_getShareBalance;

delimiter //
CREATE PROCEDURE sp_getShareBalance(
	IN userID_in  int(11),
	IN stockSymbol_in  varchar(50)
	)
	
BEGIN

	SELECT `Shares` FROM Portfolio  
	WHERE `UserID` = userID_in 
	AND `SymID` IN(
		SELECT `SymID` FROM Symbol 
		WHERE  `Symbol` = stockSymbol_in);
END;
//

delimiter ;


-- sp_getAllOpenOrders	
sp_getAllOpenOrders()
	-- Returns userID, stockSymbol, shares, orderType, price from all records of the OpenOrders table

	
-- sp_deleteOpenOrder
sp_deleteOpenOrder(orderID)
	-- deletes the record corresponding to orderID from OpenOrders
	
	
-- sp_getUserIdFromToken	
DELIMITER $$
CREATE PROCEDURE `sp_getUserIdFromToken`(token char(32))
BEGIN
	DECLARE lnUserID INT;
	DECLARE ldExpireTime DATETIME;
	DECLARE loginCursor CURSOR FOR SELECT UserID, ExpTime FROM logins
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
$$

DELIMITER ;


-- sp_marketBuy
/*Nov 5, 2012 Created By Jeff Karmy, with Jeff Miller's help
*/
drop procedure if exists sp_marketBuy;
delimiter //
create procedure sp_marketBuy(
	IN stockSymbol char(10),
	IN shares int,
	IN userID char(30)
	)
	
begin 
insert into OpenOrders (userID, stockSymbol, shares, orderType, requestTime)
values (userID, stockSymbol, shares, (select typeID from OrderTypes where description like 'Buy'), now());
select 'Your trade has been queued';
end;
//

delimiter ; 