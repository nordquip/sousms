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