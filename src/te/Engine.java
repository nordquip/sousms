import java.io.*;

/**
 *The Engine is keeps things running and checks for shutdown.
 *
 *
 *
 * The engine is intended to run constantly in the background and keep trades
 * going. It's basically just a giant while loop, which tells the executor to
 * run at specific intervals. It's also responsible for initiating a clean 
 * shutdown.
 * 
 * Written by Nickolaus D. Saint 
 * 
*/
class Engine {

private final static int INTERVAL = 500;
private final String path = ""; 
private static String pathSeparator;
private Executor executor;
    
    /**
    * Starts the Engine
    *
    * @param String of possible command line arguments, which are not yet implemented.
    * @return void
    */
    public static void main(String args[]) {
        pathSeparator = System.getProperty("path.separator");
    
        //instantiate our variables
        Engine engine = new Engine();
        engine.executor = new Executor();
        
        //begin the mainloop
        engine.mainLoop();
        
        //cleanup before we quit
        engine.shutdown();
        
    }
    
    /**
    * Part of the engine that executes, waits, checks for shutdown, and
    * executes some more.
    * 
    * @return void
    */
    private void mainLoop() {
        while(checkShutdown() == false) {
            try {
                executor.doTick();
                Thread.sleep(INTERVAL);
            }
            catch(Exception e) {
                //System.err.println("##DEBUG: " + e);
            } 
        }
    }
    
    /**
    * Checks if a shutdown has been initiated. 
    * 
    * @return true if shutdown has been initiated, false if not.
    */
    private boolean checkShutdown() {
        File f = new File("shutdown");
        if (f.exists())
            return true;
        else
            return false;
    }
    
    /**
    * Starts the shutdown process, notifying child objects so they can save
    * their data.
    * 
    * @return void
    */
    private void shutdown() {
        executor.shutdown();
        
    }
    
    
}