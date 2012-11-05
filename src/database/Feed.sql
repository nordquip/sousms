#Feed table (Keith Kuhl)

CREATE TABLE FEED( 
feedID         int not null,
bestAskPrice    decimal(10,4)    not null,
bestAskQty      int             not null,
bestBidPrice    decimal(10,4)    not null,
bestBidQty      int             not null,
close           decimal(10,4),
high            decimal(10,4)    not null,
date            DATE       not null,
time            TIME       not null,
ms              decimal(3,3)    default 0,
symbol          char(10)        not null,
lastSale        decimal(10,4)    not null,
low             decimal(10,4)    not null,
netChg          decimal(10,4)    not null,
open            decimal(10,4)    not null,
pcl             decimal(10,4)    not null,
vol             decimal(10,4)    not null,
pctChg          decimal(10,8)    not null,
CONSTRAINT SYMBOL_PK PRIMARY KEY(feedID)
);