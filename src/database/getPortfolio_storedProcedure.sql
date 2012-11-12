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