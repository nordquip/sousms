/* 
    Loads the symbol table with the 40 symbols in our 'market'
*/
-- populate the symbol table
-- will give duplicate record errors if the Symbol table already exists
-- but that's OK
-- additional symbols will not be entered in alph order, and that's OK too
-- do not delete records from this table
Insert into Symbol values
	(1, 'AAPL'),
	(2, 'ADBE'),
	(3, 'ADSK'),
	(4, 'ALU'),
	(5, 'AMZN'),
	(6, 'ATVI'),
	(7, 'AXP'),
	(8, 'CAKE'),
	(9, 'CMCSA'),
	(10, 'COKE'),
	(11, 'CSCO'),
	(12, 'DIS'),
	(13, 'DNKN'),
	(14, 'EBAY'),
	(15, 'ERTS'),
	(16, 'FB'),
	(17, 'GE'),
	(18, 'GOOG'),
	(19, 'GRMN'),
	(20, 'HAS'),
	(21, 'HSY'),
	(22, 'HOTT'),
	(23, 'INTC'),
	(24, 'JBLU'),
	(25, 'MON'),
	(26, 'MSFT'),
	(27, 'NFLX'),
	(28, 'NVDA'),
	(29, 'ORCL'),
	(30, 'PBG'),
	(31, 'QCOM'),
	(32, 'RCL'),
	(33, 'SBUX'),
	(34, 'SIRI'),
	(35, 'SPLS'),
	(36, 'TTWO'),
	(37, 'TXN'),
	(38, 'V'),
	(39, 'YHOO'),
	(40, 'SNE');
