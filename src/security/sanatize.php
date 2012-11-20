<?php # Sanatize.php #2
//this is a program that contains functions for sanitizing tokens which will be passed



// Check if the form has been submitted:
if (isset($_POST['submitted'])) {

	require_once ('mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['first_name'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	}
	
	// Check for a last name:
	if (empty($_POST['last_name'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	}
	
	// Check for an email address **Brandon Hawkins**
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	}
        //the email validation check
	elseif(preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $_POST['email'] > 0))
		{
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
		
	}
	//check float **Hunter Blakley**
        function checkFloat($subject){
                $pattern = '/^[0-9]\{0,\}[.]\{0,1\}[0-9]\{0,\}$/';
	
            return preg_match($pattern, $subject);
        }
	
	//check int **Judy Weaver**
        
        
                        //password validation **John Carlson**
                        //validate password field
                        //if data is being pased via POST method, which it should be, avoid useing GET
                
                        $password = trim($_POST['password']);
                
                        If (empty($password) || (!(ctype_alnum($password))))
                        {
                            $mistakes[] = 'Your password is either empty or Enter only ALPHANUMERIC characters ';
                        }
                
                        else
                        {
                            //accept password entry and sanitize it
                            $password = mysql_real_escape_string(stripslashes($password));
                        }
	//different password check
	// Check for a password and match against the confirmed password:
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW() )";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered. In Chapter 11 you will actually be able to log in!</p><p><br /></p>';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		//include ('includes/footer.html'); 
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>
<?php
//sanitize.php
//this contains all the data validation functions
// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	}
        //checks to see if it is a proper token
	elseif(preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $_POST['email'] > 0))
		{
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
		
	}
        
    ?>
    //checkInt() - Judy
    
    
    //checkFloat() - Hunter



    //checkPassword() - John



    //checkName() - Blake


