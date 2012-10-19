/*My SQL*/
CREATE TABLE User (
	UserID int primary key auto_increment,
	Password varchar not null,
	FName char not null,
	LName char not null,
	Email varchar not null,
	Balance float(10,2) null
)
CREATE TABLE Transaction(
	TransID int primary key auto_increment, 
	UserID int not null,
	Symbol char not null,
	Date varchar not null,
	SellBuy binary not null,
	Shares int not null,
	Foreign Key (UserID) References User(UserId)
		on update no action
)
CREATE TABLE Portfolio(
		UserID int primary key,
		Symbol char primary key,
		DateModified timestamp not null,
		Shares int not null,
		Foreign Key (UserID, Symbol) References Transaction(UserID, Symbol)
			on update cascade
)
CREATE TABLE Feed(
	Symbol char primary key,
	TS timestamp primary key,
	BestAskPrice float(5,2) not null,	
	BestAskQty float(5,2) not null
	BestBidPrice float (5,2) not null,	
	BestBidQty float(5,2) not null,
	Close float (5,2) not null,
	High float(5,2) not null,			
	Date timestamp not null,
	LastSale float (5,2) not null,		
	Low	float(5,2) not null,			
	NetChg float not null,			
	Open float not null,			
	Pcl	float not null
)
CREATE TABLE UserQuery(
	Symbol char primary key,
	TS timestamp primary key,
	UserID int not null,
	BestAskPrice float(5,2) not null,	
	BestAskQty float(5,2) not null
	BestBidPrice float (5,2) not null,	
	BestBidQty float(5,2) not null,
	Close float (5,2) not null,
	High float(5,2) not null,			
	Date timestamp not null,
	LastSale float (5,2) not null,		
	Low	float(5,2) not null,			
	NetChg float not null,			
	Open float not null,			
	Pcl	float not null,
	Foreign Key (UserID) References Portfolio(UserID)
		on update no action,
	Foreign Key (Symbol, TS, UserID, BestAskPrice, BestAskQty, BestBidPrice, BestBidQty, Close, High, Date, LastSale, Low, NetChg, Open, Pcl) References Feed(Symbol, TS, UserID, BestAskPrice, BestAskQty, BestBidPrice, BestBidQty, Close, High, Date, LastSale, Low, NetChg, Open, Pcl)
		on update no action, on delete no action
)
