/*
updated Nov 7th

It defines multiple ways to accomplish a mysql stored procedure call with
java.
*/


	import java.sql.CallableStatement;
	import java.sql.Connection;
	import java.sql.DriverManager;
	import java.sql.ParameterMetaData;
	
	//more Libraries for sql. java.sql.* should be all of the above libraries.
	//import java.sql.*;
	//I'm not sure about javax.sql
	//import javax.sql.*;


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
/*
//This is another way to do the stored proceedure call.

        // identify the stored procedure
        String simpleProc = "{ call simpleproc(?) }";
        // prepare the callable statement
        CallableStatement cs = conn.prepareCall(simpleProc);
        // register output parameters ...
        cs.registerOutParameter(1, java.sql.Types.INTEGER);
        // execute the stored procedures: proc3
        cs.execute();
        // extract the output parameters
        int param1 = cs.getInt(1);
        System.out.println("param1=" + param1);
        // get ParameterMetaData
        ParameterMetaData pmeta = cs.getParameterMetaData();
        if (pmeta == null) {
          System.out.println("Vendor does not support ParameterMetaData");
        } else {
          System.out.println(pmeta.getParameterType(1));
        }
        conn.close();
*/
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

