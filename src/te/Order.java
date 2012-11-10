import java.sql.*;

/**
 * Order
 * An abstract class to hold order information. This class is ment
 * to be overridden by a specific order class like Buy or Sell. These
 * child classes will implement the proper execute method for any 
 * particular order
*/

public abstract class Order {
    private int userID;
    private String stockSymbol;
    private int shares;
    private String orderType;
    private double price;
    public void setUserID(int userid) {userID = userid;}
    public void setStockSymbol(String s) {stockSymbol = s;}
    public void setShares(int shares) {this.shares = shares;}
    public void setOrderType(String ot) {this.orderType = ot;}
    public void setPrice(double price) {this.price = price;}
    abstract public void execute(Connection dbconn);
}