-- Name: getPortfolio
-- Author: Emily!
-- Parameters: UserID
-- Description: Returns portfolio based off of user's identification number.

DROP PROCEDURE IF EXISTS getPortfolio;
DELIMITER //
CREATE PROCEDURE getPortfolio(
@ UserID
)
AS
BEGIN	
SELECT p.symbol, p.numberShares, f.bestAskPrice
FROM portfolio p, feed f
WHERE UserID = @UserID;
END //
Delimiter ;

-- Name: getTradeHistory
-- Author: Josh Carroll
-- Parameters: UID = Particular Unigue Users ID
-- Description: Stored procudure accepts a single UserID (UID) 
--		and returns the Symbol, number of Shares, and Price of Shares.

DROP PROCEDURE IF EXISTS getTradeHistory;
DELIMITER //
CREATE PROCEDURE getTradeHistory(
    IN UID int,
    OUT Symbol char,
    OUT Shares int,
    OUT Price float
)
BEGIN 
    SELECT Symbol FROM stock WHERE UserID=UID INTO Symbol;
    SELECT Shares FROM stock WHERE UserID=UID INTO Shares;
    SELECT Price FROM stock WHERE UserID=UID INTO Price;
    
END //
DELIMITER ; 
-- Name: buy
-- Author: Martin DeWitt
-- Parameters: UID = Particular Users Unique Identification Number
--			   SYM = Unique Identifier For A Particular Company
--			   NUM = Number Of Shares to Purchase
-- Description: This stored procedure accepts 4 parameters: UID (UserID), 
--				SYM (Symbol), and NUM (Number of Shares), as well as Purchase Price.
-- 				Returns Boolean of 0 if successful, 1 if not successful.

Drop Procedure if exists buy;
Delimiter //
Create Procedure buy(
	in Uid int,
	in Sym char,
	in Num int,
	in Prc float,
	out Success Boolean
)
Begin
	Declare symId int;
	Declare totalCost float;
	Declare usrBalance float;
	set totalcost=Num*Prc;
	Select SymID from Symbol Where Symbol=Sym into symId;
	Select Balance From Cash Where UserID=Uid Into usrBalance;
	If usrBalance>=totalCost Then
		Set Success='0';
		Insert into Stock (UserID, SymID, SellBuy, Shares, Price) Values (Uid, symId, Success, Num, totalCost);
		Update Cash Set Balance=Balance-totalCost where UserID=Uid;
	Else
		Set Success='1';
	End If;
End //
Delimiter ;

-- Name: sell
-- Author: Scott Williams
-- Parameters: UserID (UID), Symbol (SYM), Number of shares (NUM), and 
--			   Purchase price (PRC)
-- Description: Sells shares of a users current holdings.

Drop Procedure if exists sell;
Delimiter //
Create Procedure sell(
	in uid int,
	in symID int,
	in num int,
	in prc float,
	out success Boolean
)
Begin
	Declare ownsStock int;
	Declare totalSell float;
	Declare symbolID int;
	Declare sellSuccess Boolean;
	
	Select SymID from Portfolio 
	Where UserID=Uid into symID;
	
	Select Shares from Portfolio 
	Where UserID=Uid and SymbolID=symID 
	Into ownsStock;
	
	If num=ownsStock then
		set sellSuccess='0';
	else
		set sellSuccess='1';
	end if;
	
	if symbolID=symID then
		if ownsStock>=num then
			Set success='1';
			set totalSell=prc*num;
			insert into Stock (UserID, SymbolID, SellBuy, Shares, Price)
				values (uid, sym, '0', num, totalSell);
			update Cash 
				set Balance=Balance+totalSell;
			if sellSuccess='0' then
				delete from Portfolio where UserID=uid and SymbolID=symID;
			end if;
		end if;
	else
	
		Set success='0';
		
	end if;
End //
Delimiter ;

-- Name: getToken
-- Author: Keith Kuhl
-- Parameters: UserID
-- Description: Returns current token number
DROP PROCEDURE IF EXISTS `getToken`;
DELIMITER //
CREATE PROCEDURE `getToken`(
    IN UserID int,
    IN Passwords varchar(40),
    IN Token varchar(32)
)
BEGIN
    INSERT INTO LOGIN (Token)
    Values (Token);
END //
DELIMITER ;

--Author: Martin DeWitt
--Description: Returns Login Token
Drop Procedure if exists getToken;
Delimiter //
Create Procedure getToken(
	in Uid int, 
	out token varchar(32)
)
Begin
	Declare isUser int;
	Declare tok varChar(32);
	Select UserID From User Where UserID=Uid Into isUser;
	If isUser=Uid then
		Select Token from Login where UserID=Uid into tok;
		Set token=tok;
	Else 	
		Set token='NoTokenForYouBudday';
	End If; 
End //
Delimiter ;



