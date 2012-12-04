##Executor

The executor will collect all of the open orders and try to execute them. If the execution completes, it will drop the order from the active list and log it. If the order can't complete, the executor leaves it in the database for later. 

Each cycle through all of the orders is called a tick. The engine will be responsible for deciding when ticks happen, the executor is just concerned with executing orders.

doTick() will look something like this:

	getAllOpenOrders() from the database
	For each order
		IF canExecute(order)
			Execute order
			If order completed
				dropOneOpenOrder(order.orderID) //Drop order from database
				Log order in database //Do we still need this? All orders should be pre-logged by trigger.
			Else
				Store order in database //is this a "failed orders" table?
			

###Variables 
 * openOrders -- a data structure of all the current open orders. A Linked list would work well for keeping track of these.

###Methods
 * doTick() -- Go through the entire list of orders and execute them.
 * getAllOpenOrders()  -- get all orders from the database.
 * dropOneOpenOrder(orderID) -- Drop an order from the Open Orders list.
 * canExecute(order) -- Checks to see if conditions (limit has been reached) have been met.