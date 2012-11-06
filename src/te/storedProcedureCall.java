
	import java.sql.CallableStatement;
	import java.sql.Connection;
	import java.sql.DriverManager;
	import java.sql.ParameterMetaData;
	import java.sql.*;
	import javax.sql.*;

	public class storedProcedureCall {
	  public static void main(String[] args) throws Exception {
		//Open the MySQL connection
	    Connection conn = getMySqlConnection();
	    //Print Connection Confirmation
	    System.out.println("Connected to DB");
	    // prepare the callable statement
	    CallableStatement cs = conn.prepareCall("{call insertSell(?,?,?,?)}");
	    //insertSell Input == INTL Pretend sell
	    cs.setInt(1,1);
	    cs.setString(2,"INTL");
	    cs.setInt(3,50);
	    cs.setInt(4,25);
	    cs.execute();
	    
	    System.out.println("Stored Procedure Executed");
	    
	    //Close Connection
	    conn.close();
	    System.out.println("Disconnected from DB");
	  }


	  public static Connection getMySqlConnection() throws Exception {
	    String driver = "com.mysql.jdbc.Driver";
	    String url = "jdbc:mysql://webpages.sou.edu:3306/usr_barnesj1_0";
	    String username = "barnesj1";
	    String password = "hunns3Bgdx";

	    Class.forName(driver);
	    Connection conn = DriverManager.getConnection(url, username, password);
	    return conn;
	  }


	}

