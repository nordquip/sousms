##Order

The concept of 'order' is a bit abstract here, since there can be many different kinds of orders: buy, sell, limitBuy, limitSell. We will have to know which kind of transaction we are doing when the executor comes along and simply says, "Make it happen!" 

We will overcome this by having 'Order' be an abstract class with an abstract method called execute(). 'Buy' and 'Sell' will be subclasses of 'Order', and override the execute method with the correct kind of transaction. 

###Variables

 * userID
 * stockSymbol
 * numStock
 * TimeStamp

###Methods

 * execute() -- abstract method which will be implemented by subclass. This method will be called by the exectuor to complete the sell.
 * dropOrder() -- drops an order from the database, if the order is completed.

