<?php
/*
 *MarketSell.class.php
 *
 *Calls insertSell.sql to add a 'Sell' record to OpenOrders.sql
 *<p>Bugs:  Assumes the existence of an as-yet-unwritten 
 *			stored procedure, getShareBalance(userID, symbol)
 *@author Brittany Dighton
 *
 */
 
 class MarketSell 
 {	
	public function sell($userID, $stockSymbol, $numShares)
	{
		$user = $userID;
		$symbol = $stockSymbol;
		$shares = $numShares;
		$price = NULL;
		
		$conn = new mysqli('localhost', 'root', '', 'sousms');
		if ($conn->connect_errno){	
			die("Unable to connect to database:  (" . $conn->connect_errno . ") ". $conn->connect_error);
		}
		
		if (!$conn->multi_query("CALL getShareBalance($user, $symbol)")) {
			die ("Error calling stored procedure:  (" . $conn->errno . ") " . $conn->error);
		}
		
		if ($result = $conn->store_result()) 
		{
			if ($result >= $shares)
			{
				if (!$conn->query("CALL insertSell($user, $symbol, $shares, $price)")) 
				{
					die("Error calling stored procedure:  (" . $conn->errno . ") " . $conn->error);
				}
				$result->free();
			}
			else{
				echo ("Insufficient shares of ", $symbol, " to sell ", $shares, " shares.");
			}
		else {
			if ($conn->errno) 
			{
				die ("Error storing result set: (" . $conn->errno . ") " . $conn->error);
			}
			}
		}
 }
 ?>

		