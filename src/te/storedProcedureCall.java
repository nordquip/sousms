
	import java.sql.CallableStatement;
	import java.sql.Connection;
	import java.sql.DriverManager;
	import java.sql.ParameterMetaData;

	public class storedProcedureCall {
	  public static void main(String[] args) throws Exception {
		//Open the MySQL connection
	    Connection conn = getMySqlConnection();
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
	  }


	  public static Connection getMySqlConnection() throws Exception {
	    String driver = "org.gjt.mm.mysql.Driver";
	    String url = "jdbc:mysql://140.211.89.15/";
	    String username = "oost";
	    String password = "oost";

	    Class.forName(driver);
	    Connection conn = DriverManager.getConnection(url, username, password);
	    return conn;
	  }


	}

