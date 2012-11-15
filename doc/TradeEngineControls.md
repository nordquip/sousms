#Trade Engine Controls

This file documents how to use the Trade Engine "Looper Executor". To be specific, it is the part of the trade engine written in java, which is responsible for executing all of the trades. It does not include any documentation on the Trade Engine "Webservice" written in php. Good luck finding documentation on that.

###Setting up your environment

Before you start, make sure you have all of the required components:

 * java version "1.6.0_35"
 * javac 1.6.0_35 (Java compiler)
 * Java MySQL JDBC Driver
 * GNU Make 3.81


###Getting started

To use the Trade Engine, you will need to be concerned with two files: the makefile, and the startup script. The makefile ensures everything is compiled properly, and the startup script runs the program and forks it. Executing both of these scrips is easy, just run make and bash respectfully in  src/te/:

	$ make
	$ bash startup.sh start
	
On the next few lines, you should see the java files being compiled. On the last line, you should see "Engine STARTED". 

Note: Make will check the compiled code against any "newer" source files. If it finds new source code, Make will re-compile it.

###Getting Fancy

Both of these files support many different options. Check in both files for the latest ones. Here is a simple guide to the extra stuff you can do.

*Make*

 * clean -- Deletes all of the compiled code, giving you the clean directory you started with.

*Startup*

 * start -- Starts the program (as a daemon in the background)
 * restart -- Stops, then starts the engine. Useful if something changed in the config file, and you want to reload it.
 * status -- Tells you if the engine is currently running or stopped.
 * stop -- Stops the engine.
 * forcestop -- If the engine is behaving oddly, this is a more sure way to stop it. Beware, however, you may lose information the engine wasn't able to save before it shutdown.

###Example

If you wanted to start the Engine with the latest code, you might do this:

	$ bash startup.sh stop
	$ make
	$ bash startup.sh start
	
