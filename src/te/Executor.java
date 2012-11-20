import java.sql.*;
import java.util.*;

/**
 *The Executor loads all of the open orders from the database and sequentially
 *executes them. 
 *
 *
 *
 * When the executor starts, it makes a connection with the database that lasts
 * until shutdown. It grabs all of the open orders, and executes them.
 * (See method doTick) 
 * 
 * 
 * Written by Nickolaus D. Saint 
 * 
*/
class Executor {

//Mysql connection variables
private String MYSQLDATABASE; 
private String MYSQLUSER;
private String MYSQLPASSWORD;
private ConfigData configData; //We will get all of the mysql variables from here


//This shouldn't need to change, except maybe between special platforms.
private final static String DRIVER = "com.mysql.jdbc.Driver";

//The connection to the database
private Connection dBConn; 
//The list of open orders to be executed. 
private PriorityQueue<Order> openOrders;

public Executor(ConfigData configData) {
    this.configData = configData;
    MYSQLDATABASE = configData.get("mysqlDatabase");
    MYSQLUSER = configData.get("mysqlUser");
    MYSQLPASSWORD = configData.get("mysqlPassword");
}

    /**
    * This is the main method called by the Engine. A 'tick' is one cycle through
    * all of the open orders. This method checks the db connections, grabs all the
    * open orders, then exececutes them. 
    *
    * 
    * @return void
    */
    public void doTick() throws Exception {
        //connect to the database
        try {
            renewDBConnection();
        } 
        catch (SQLException sqle) {
            System.err.println("[CRITICAL]: Could not connect to db: ");
            throw sqle;
        }
        catch (ClassNotFoundException cnfe) {
            System.err.println("[CRITICAL]: You need to install 'com.mysql.jdbc.Driver' on your system. ");
            throw cnfe;
        }

        //get all of the open orders        
        getOrders();
        
        //execute all open orders.
        while(openOrders.peek() != null)
            openOrders.poll().execute(dBConn);
        
        //System.out.println("[DEBUG]: Successful Tick");
    }
    
    /**
    * renewDBConnection
    *
    * Checks if the connection to the database is still good, and tries
    * to reconnect if it isn't. 
    *
    * 
    * @throws SqlException -- This happens if the method fails to connect to
    *       the database
    * @throws ClassNotFoundException -- If java was not properly set up with sql
    */
    private void renewDBConnection() throws SQLException, ClassNotFoundException{
        //If we already have a connection, simply return.
        //Otherwise, make the connection.
        if(dBConn != null && dBConn.isValid(1))
            return;
        
        //If the driver didn't load properly, this will throw a 
        Class.forName(DRIVER);
        
        //will throw sqlexeption if the data here is not correct.
        //a "no suitable driver for ..." Exception is also possible too
        dBConn = DriverManager.getConnection(MYSQLDATABASE, MYSQLUSER, MYSQLPASSWORD);   
    }
    
    /**
    * get Orders() 
    *
    * Gets all of the open orders from the database, and assembles them into objects
    */
    private void getOrders() {
        openOrders = new PriorityQueue<Order>();

        CallableStatement cs;
        ResultSet rs;

        //Type specific vars
        String type = "";
        Class typeClass;
        Order order;
        try {
    	    cs = dBConn.prepareCall("{call getAllOpenOrders()}");
            rs = cs.executeQuery();
            while (rs.next()) {
                
                //create the correct kind of order
                type = rs.getString("orderType");
                typeClass = Class.forName(type);
                order = (Order) typeClass.newInstance();
                
                //set the vars. 
                order.setUserID(rs.getInt("userID"));
                order.setStockSymbol(rs.getString("stockSymbol"));
                order.setShares(rs.getInt("shares"));
                //The order probably won't need to know what type it is, but we'll put it there
                //just in case.
                order.setOrderDesc(type);
                order.setPrice(rs.getDouble("price"));
                //I don't think we'll need time.
                //order.setTime(rs.getTime?("datetime"));
                
                //Add the order to the list.
                openOrders.add(order);

            }
        } catch (SQLException e ) {
            System.err.println("[CRITICAL] Error Retrieving Open Order List: " + e);
        } catch (ClassNotFoundException cnfe) {
            System.err.println("[CRITICAL] Could not find java code for " + type + ": "+ cnfe);
        } catch (InstantiationException ie) {
            System.err.println("[CRITICAL] Could not instantiate " + type + ": " + ie);
        } catch (IllegalAccessException iae) {
            System.err.println("[CRITICAL] Permissions Issue: " + iae);
        }
        
    }
    
    /**
    * shutdown
    *
    * Shuts down the executor. Currently, this only means it closes the database
    */
    
    public void shutdown() {
        //close the db connection.
        try {
            dBConn.close();
        } catch (Exception e ) {}
    }
}
