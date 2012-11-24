/* 
 * Lists headers of, and/or information on, stored procedures needed by 
 * User Accounts module
 */

DELIMITER ;
-- sp_getUserIdFromCredentials
-- Params:
--   Email (username)
--   Password (md5)
-- Displays UserID (or nothing if Email, password not found)
-- Pete Nordquist
DROP PROCEDURE IF EXISTS sp_getUserIdFromCredentials;
DELIMITER //
CREATE PROCEDURE `sp_getUserIdFromCredentials`(
	IN Email varchar(40),
	IN md5Password varchar(40)
)
BEGIN
	SELECT UserID FROM User
		WHERE User.Email = Email and Password = md5Password;
END;
//

DELIMITER ;
-- sp_enterLoginTokenFor
-- Pete Nordquist
DROP PROCEDURE IF EXISTS sp_enterLoginTokenFor;
DELIMITER //
CREATE PROCEDURE `sp_enterLoginTokenFor`(
	IN userID int(11),
	IN token varchar(32),
	IN begTS timestamp,
	IN endts timestamp
)
BEGIN
	DECLARE EXIT HANDLER for SQLWARNING BEGIN
		SELECT 'Unable to insert Login record.' AS statusmsg;
	END;
	DECLARE EXIT HANDLER for SQLEXCEPTION BEGIN
		SELECT 'Unable to insert Login record.' AS statusmsg;
	END;

	insert into Login (`UserID`, `Token`, `begTS`, `endts`)
		values (userID, token, begTS, endts);
END;
//

DELIMITER ;

