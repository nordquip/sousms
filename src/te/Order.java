import java.sql.*;

/**
 * Order
 * An abstract class to hold order information. This class is ment
 * to be overridden by a specific order class like Buy or Sell. These
 * child classes will implement the proper execute method for any 
 * particular order
 
 The information held in the order class reflects all of the data held
 in the Open Orders table in the Database. As of now, this is the data:
    openorders.orderID,
	openorders.userID, 
	openorders.symID, 
	symbol.symbol,
	openorders.shares,
	openorders.orderType,
	ordertypes.description AS typedesc,
	openorders.price
	
    The data in the Order class below should be updated when the Database
    table is updated.
*/

public abstract class Order {
    
    //All of the data contained in a single 'Open Orders' order
    private int orderID;
    private int userID;
    private int symID;
    private String stockSymbol;
    private int shares;
    private int orderType;
    private String typeDesc;
    private double price;
    
    /*
    These are all of the setter functions the executor will
    use to give the Order its data. There should be setters 
    for all of the above types
    
    SPECIAL NOTE FROM NICK: I haven't updated these since the
    table last changed. Until I do, the executor won't actually 
    work.
    */
    public void setUserID(int userid) {userID = userid;}
    public void setStockSymbol(String s) {stockSymbol = s;}
    public void setShares(int shares) {this.shares = shares;}
    public void setOrderType(int ot) {this.orderType = ot;}
    public void setOrderDesc(String td) {this.typeDesc = td;}
    public void setPrice(double price) {this.price = price;}
    abstract public void execute(Connection dbconn);
}