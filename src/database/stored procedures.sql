DELIMITTER //

CREATE PROCEDURE sell(

IN UID int,
IN SYM varchar(5),
IN NUM int,
IN PRC float(10,4),
OUT COM binary,
)

BEGIN
	--sets success. 
	SET yes = 1;
	SET complete = 1;
	
	--checks if user has stock to sell.
	SELECT symbol 
	FROM portfolio
		IF (symbol == SYM)THEN
			yes = 0;
		ELSE
			yes = 1;
	WHERE userID = UID;
			
	--checks the curent price of stock.
	SELECT LastSale
	FROM feed;
	
	--removes the stock from portfolio after sold.
	DELETE FROM portfolio
	WHERE symbol == SYM
	AND userID = UID;
	
	--adds amount of sale to balance.
	UPDATE cash
	SET balance = LastSale + PRC
	WHERE userID = UID;

	select @complete;
END //

DELIMITTER;


--sell(userID, symbol, #shares, price) returns 1 or 0 -- scott
