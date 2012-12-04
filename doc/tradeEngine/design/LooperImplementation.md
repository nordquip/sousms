##Trade Engine Executor Implementation

**NOTE Dec 4 2012**:All of this documentation was written before the Looper was. It is still accurate enough to give you an idea for how things work, but the specifics have probably changed. 

The executor will be responsible for processing all of the orders a user makes. It will be constantly checking for new orders, and executing all of the orders it already has.

The system will be made up of four major parts:

 * main -- EDIT: We will not need a main since the start/stop script was written in bash instead of Java. 
 * Makefile -- Responsible for compiling all of the Java code
 * [Engine](LooperEngine.md) -- This will be a giant loop which will run the whole system.
 * [Executor](LooperExecutor.md) -- will do all of the actual transactions with orders
 * [Orders](LooperOrders.md) -- Will keep track of order information, and standardize how orders execute.