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
    protected int orderID;
    protected int userID;
    protected int symID;
    protected String stockSymbol;
    protected int shares;
    protected int orderType;
    protected String typeDesc;
    protected double price;
    
    /*
    These are all of the setter functions the executor will
    use to give the Order its data. There should be setters 
    for all of the above types
    */
    public void setOrderID(int orderid) {this.orderID = orderid;}
    public void setUserID(int userid) {userID = userid;}
    public void setSymID(int symid) {this.symID = symid;}
    public void setStockSymbol(String s) {stockSymbol = s;}
    public void setShares(int shares) {this.shares = shares;}
    public void setOrderType(int ot) {this.orderType = ot;}
    public void setOrderDesc(String td) {this.typeDesc = td;}
    public void setPrice(double price) {this.price = price;}
    abstract public void execute(Connection dbconn);
}