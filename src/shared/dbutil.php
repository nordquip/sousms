<?php
/**
 * include file providing utility functions to ease database operations
 * including the file makes the connection available
 * assumes the session variables storing the name and password have been set
 * 
 * usage:
 * include('<relativepath>/dbutil.php');
 * NOTE: path must be adjusted depending on the location of the including 
 * php file
*/

// connect to the database

/** TODO - Navigate to the sousmsConfig.xml file and use stored mysql information to connect to the database.
 *
 * connect()
 * connects the php page to the database
 * @param db mysql database name
 * @param pw passw
 * @return mysqli connection object, null if error
*/

$mysql = new mysqli('localhost',
	'root',   // user name - $_SESSION['db'],
	'',			// password - $_SESSION['pw'], -- we will n
	'sousms');	// database - $_SESSION['db']);

if (mysqli_connect_errno())
{
	die(printf('MySQL Server connection failed: %s', mysqli_connect_error()));
}

// The following functions assume you have already connected to the db

/**
 * callAndPrint()
 * calls a stored procedure using the provided string
 * assumes the query string asks the stored procedure
 * to return a single value in @r
 * @param callStr mysql_query string
 * @return the value returned by the stored proc
 */
function callAndPrint( $callStr) {

	global $mysql;
    if ($mysql->multi_query($callStr))
    {
        $show_results = true;
        $rs = array();
 
        do {
            // Lets work with the first result set
            if ($result = $mysql->use_result())
            {
                // Loop the first result set, reading it into an array
                while ($row = $result->fetch_array(MYSQLI_ASSOC))
                {
                    // $rs[] = $row; // original
					foreach( $row as $value)
						printf("%-20s",$value);
					echo "<br />";
                }
 
                // Close the result set
                $result->close();
            }
        } while ($mysql->more_results() && $mysql->next_result());
    }
    else
    {
        echo '<p>There were problems with your query ['.$callStr.
			']:<br /><strong>Error Code '.$mysql->errno.
			' :: Error Message '.$mysql->error.'</strong></p>';
    }
}
?>

