<html>
 <head>
  <title>Transaction Details</title>
 </head>
 <body>

<h1> Transaction Details</h1>

 <br>
 <?php
  
  $token = $_COOKIE;
  $stockSymbol =     $_POST['symbol'];
  $amount =     $_POST['amount'];


switch ($transaction)
{
	case "buy":
  		buy($stockSymbol, $amount, $username);
		break;
	case "sell":
  		echo ("Not Implemented");
		break;
	default:
		echo ("You broke the simulator!");
}

function buy($stockSymbol, $amount, $username) {
	$msg = "Your (buy) transaction was successful.";
	$msg .= "</br>*Function not actually implemented!*";
	echo( $msg );
}

 ?>

 </body>
</html>
