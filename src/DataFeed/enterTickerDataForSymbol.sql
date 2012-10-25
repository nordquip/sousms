/* enterTickerDataForSymbol(bestAskPrice, bestAskQty, bestBidPrice, bestBidQty, close, high, lastSale, low, netChg, open, pcl, vol, date, pctChg, symbol, time)

This Procedure must:
1. Store all variables into corresponding fields on the appropriate table
*/
drop procedure if exists enterTickerDataForSymbol;
delimiter //
create procedure enterTickerDataForSymbol(
	IN bestAskPrice decimal(10,4),
	IN bestAskQty int,
	IN bestBidPrice decimal(10,4),
	IN bestBidQty int,
	IN close decimal(10,4),
	IN high decimal(10,4),
	IN lastSale decimal(10,4),
	IN low decimal(10,4),
	IN netChg decimal(10,4),
	IN open decimal(10,4),
	IN pcl decimal(10,4),
	IN vol decimal(10,4),
	IN date DATE,
	IN pctChg decimal(10,8),
	IN symbol char(10),
	IN time TIME) 

begin
insert into feed values (bestAskPrice, bestAskQty, bestBidPrice, bestBidQty, close, high, lastSale, low, netChg, open, pcl, vol, date, pctChg, symbol, time);
select * from feed;
end;
//

