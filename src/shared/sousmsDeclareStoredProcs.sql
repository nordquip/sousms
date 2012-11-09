/*
	sousms Stored Procedure interfaces with their implementations
	Pete Nordquist 121019
*/


/* enterTickerDataForSymbol(bestAskPrice, bestAskQty, bestBidPrice, bestBidQty, close, high, lastSale, low, netChg, open, pcl, vol, date, pctChg, symbol, time)

This Procedure must:
1. Store all variables into corresponding fields on the appropriate table
*/
drop procedure if exists enterTickerDataForSymbol;
delimiter &&
create procedure enterTickerDataForSymbol(
	IN symbol varchar(8),
	IN bestAskPrice decimal(10,4),
	IN bestAskQty int,
	IN bestBidPrice decimal(10,4),
	IN bestBidQty int,
	IN close decimal(10,4),
	IN high decimal(10,4),
	IN tDate date,
	IN tTime time,
	IN ms decimal(3,0),
	IN lastSale decimal(10,4),
	IN low decimal(10,4),
	IN netChg decimal(10,4),
	IN open decimal(10,4),
	IN pcl decimal(10,4),
	IN vol int,
	IN pctChg decimal(10,8)
	)

begin
	-- handler delcarations have to be at the beginning of the proc
	-- duplicate entry
	DECLARE CONTINUE HANDLER FOR SQLSTATE '23000'
		BEGIN END;  -- do nothing


	insert into Feed values (symbol, bestAskPrice, bestAskQty, bestBidPrice,
		bestBidQty, close, high, tDate, tTime, ms, lastSale, low, netChg, open,
		pcl, vol, pctChg);
end;
&&

/* add other interfaces in the same format */

delimiter ;
