#Trade Engine Architecture

**SPECIAL NOTE**: This page was written about a month before the Trade Engine was finished. It is still generally accurate, but don't trust any specifics.

The core of the Trade Engine will be a standalone program separate from the Database and the User Interface. It will be responsible for authorizing all trades, and logging all of the transactions the users will make. Basically, a user will start an order, it will be queued in the Trade Engine, and the Trade Engine will execute it through the database.

The advantage of having the Trade Engine separate is the flexibility it provides. This architecture will make it easy to add Limit Order functionality later.

- - - -

###Database

The database will have to keep track of two different structures of data: The list of Open Orders, and a log of Trade Transactions.

Open Orders will be all the trades that have not yet executed. Market Orders (one time, 'buy now' transactions) will be short lived, and pop in and out of this list. Limit Orders will stick around until their conditional transaction is met. The Trade Engine will check and modify this list frequently (every .5 to 1 seconds) to execute orders.

The specific list is as follows:

**Open Orders**

 * UserID -- A way to uniquely identify the user.
 * StockSymbol -- The company stock symbol
 * Shares -- The number of shares they want to buy/sell
 * Type -- The type of order. "buy" and "sell" are the only two types for now.
 * Price -- The price of the limit order, or null for market order
 * Timestamp -- The time the trade was initiated. (When the user clicks buy)  
  
Trade Transactions will simply be a log of what trades have successfully and unsuccessfully occurred. (Ex. "User sam bought 2 shares of INTL"). The log will pretty save the same data from Open Orders, with a couple additions.

**Trade Log**

 * UserID -- A way to uniquely identify the user.
 * StockSymbol -- The company stock symbol
 * Shares -- The number of shares they want to buy/sell
 * Type -- The type of order. "buy" and "sell" are the only two types for now.
 * Price -- The price of the limit order, or null for market order

 * Initiated Timestamp -- The time the trade was initiated.
 * Completed Timestamp -- When the trade actually completes.

- - - -

###User Interface
The Trade Engine will communicate with the user interface through PHP interfaces. These interfaces are basically:

 * Market Buy
 * Market Sell
 * Cancel Order (pending)
 * Limit Order Buy (pending)
 * Limit Order Sell (pending)
 * View Open Orders (pending)
 * View Order History (pending)  
NOTE: The last two may be implemented by User Accounts Team instead.  
An up-to-date list of the interfaces can be found [here](https://github.com/NickolausDS/sousms/blob/master/doc/TradeEngineInterfaces.md).