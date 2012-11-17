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
    public void doTick() {
        //connect to the database
        try {
            renewDBConnection();
        } 
        catch (SQLException sqle) {
            //deal with sql exception
            //System.err.println("Could not connect to db: " + sqle);
            return;
        }
        catch (ClassNotFoundException cnfe) {
            //System.err.println("You need to install 'com.mysql.jdbc.Driver' on your system. " + cnfe);
            shutdown();
        }

        //get all of the open orders        
        getOrders();
        
        //execute all open orders.
        while(openOrders.peek() != null)
            openOrders.poll().execute(dBConn);
        
        //System.out.println("##DEBUG: Successful Tick");
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

        CallableStatement cs;
        ResultSet rs;

        //Type specific vars
        String type;
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
                order.setOrderType(type);
                order.setPrice(rs.getDouble("price"));
                //I don't think we'll need time.
                //order.setTime(rs.getTime?("datetime"));

            }
        } catch (SQLException e ) {
            //System.out.println("Error Retrieving Open Order List: " + e);
        } catch (ClassNotFoundException cnfe) {
            //System.out.println("Could not find order type " + type+ ": "+ cnfe);
        } catch (InstantiationException ie) {
            //System.out.println(ie);
        } catch (IllegalAccessException iae) {
            //System.out.println(iae);
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
