<html>
  <title>User Login Page</title>
  <head>
  <script language="JavaScript">
  function validateForm(theForm){
  if(theForm.userid.value ==""){
  alert("Enter the name");
  theForm.userid.focus();
  return false;
  }
  if(theForm.password.value==""){
  alert("enter the password");
  theForm.password.focus();
  return false;
  }
  
     if (isset($_POST['userid'])) {  
        $userid = filter_var($_POST['userid'], FILTER_SANITIZE_USERID);  
        if (filter_var($userid, FILTER_VALIDATE_USERID)) {  
            echo "$userid is a valid username.<br/><br/>";  
        } else {  
            echo "$userid is <strong>NOT</strong> a valid userid.<br/><br/>";  
        }  
    }
  
  return true;
  }
  </script>
  </head>

  <body>
  <table border="1" cellspacing="0" cellpadding="0">
  <h2>Login Form</h2>
  <form method="POST" action="loginaction.php" onsubmit="return validateForm(this);">
  <font size="2"> <strong> Enter username and Password: </strong></font>
  <tr>
  <td><b> UserName</b></td>
  <td><input type="text" size="20" name="userid"></td><br>
  </tr>
  <tr>
  <td><b> Password </b></td>
  <td><input type="password" size="20" name="password"></td>
  </tr><br>
  <tr>
  <td><input type="submit" name="submit" value="submit"></td>
  </tr>
  </form>
  </body>  
  </table>
</html>
============

<?
  if( !isset($_SESSION) ) { session_start(); }
  
  function dbConnect ($name, $pw) {
	// Create a mysql connection
  $link=mysql_connect("localhost", $name, $pw) or die ("couldnot connect: ".mysql_error());
	// select the correct database
  mysql_select_db("usr_".$name."_1", $link)  or exit('Error Selecting database: '.mysql_error()); ;
  }
  dbConnect('lykinsb', 'lykinsb');
  
  $userid=$_POST["userid"];
  $password=$_POST["password"];

  $errormessage = "";

  $sql="SELECT * FROM users  where username='$userid' and password='$password'";
  $result = mysql_query($sql, $link)  or exit('$sql failed: '.mysql_error()); 
  $num_rows = mysql_num_rows($result);
  if($num_rows==0){
  header("Location: error.php");
  } else {
  header("Location: welcome.php");
  exit;
  }
  
?>
===============

<h2>Login Success...</h2>
================

<h2>Login Failed...</h2>
<a href="userlogin.php">login again</a>