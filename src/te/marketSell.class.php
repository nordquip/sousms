<?php
/*
 *MarketSell.class.php
 *
 *Calls sp_insertSell to add a 'Sell' record to the OpenOrders table
 *@author Brittany Dighton
 *
 */
 
 class MarketSell 
 {	
 
	public function sell($conn, $user, $symbol, $shares) 
	{	
		$price = NULL;
		$shareBal = 0;
		$mssg = "";
	
		try 
		{			
			$stmt = $conn->prepare("CALL sp_getShareBalance(?,?)");
			$stmt->execute(array($user, $symbol));
			if($stmt->rowCount() > 0)
			{
				$stmt->bindColumn(1, $shareBal);
				$stmt->fetch(PDO::FETCH_BOUND);	
			}
			else
			{
				$mssg .= "Unable to verify share balance.";
			}
		}		
	 
		catch (PDOException $e) 
		{
			$mssg .= "Error: " . $e->getMessage();
		}
	
		if ($shareBal >= $shares)
		{
			try
			{
				$stmt = $conn->prepare("CALL sp_insertSell(?,?,?,?)");
				$stmt->execute(array($user, $symbol, $shares, $price));
				$stmt->bindColumn(1, $statusMsg);
				$stmt->fetch(PDO::FETCH_BOUND);
				$mssg .= $statusMsg;
			}
		
			catch (PDOException $e) 
			{			
				$mssg .= "Error: " . $e->getMessage();	
			}
		}
		else
		{
			$mssg .= "Error:  Insufficient holdings of $symbol to sell $shares shares.";
		}
		return ($mssg);
		
	}
}
 ?>