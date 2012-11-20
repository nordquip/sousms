<?php
/*
 *TradeEngineSell.class.php
 *
 *Calls sp_insertSell to add a 'Sell' record to the OpenOrders table
 *@author Brittany Dighton
 *Modified by Jeff Miller, 2012-11-19
 *
 */
 
 class TradeEngineSell 
 {	
 
	public function sell($conn, $user, $symID, $shares, $price) 
	{
		$shareBal = 0;
		$symbol = "";
		$mssg = "";
	
		try 
		{			
			$stmt = $conn->prepare("CALL sp_getShareBalance(?,?)");
			$stmt->execute(array($user, $symID));
			if($stmt->rowCount() > 0)
			{
				$stmt->bindColumn(1, $shareBal);
				$stmt->bindColumn(2, $symbol);
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
		
		if ($shareBal > 0) {
			if ($shareBal >= $shares)
			{
				try
				{
					$stmt = $conn->prepare("CALL sp_insertSell(?,?,?,?)");
					$stmt->execute(array($user, $symID, $shares, $price));
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
		}
		return ($mssg);
		
	}
}
 ?>