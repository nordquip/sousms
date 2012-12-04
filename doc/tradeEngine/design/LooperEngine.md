##Engine

The Engine is basically a giant while loop that will keep the executor running. Each time it loops, it will call executor.doTick(). In between these calls, it will check to see if someone has ordered the system to shutdown, as well as wait for a specific **interval** to avoid overloading the system.

The mainLoop will look something like this:

    While the system is running
	executor.doTick()
	check for shutdown
	if shutdown
		save order information
		exit
	else
		wait for an interval

###Variables
 * INTERVAL -- A constant time we will wait between checking orders, probably between 250 to 500 ms
 * SHUTDOWN -- boolean true or false, for if we are shutting the system down.
 * executor object -- object responsible for executing open orders.


###Methods
 * mainLoop() -- responsible for running the whole system
 * shutdown() -- can be called by other programs to shut this system down. (break the main loop)