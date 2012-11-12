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
	private $conn;
	private $mssg;
	
	public function sell($conn_in, $userID, $stockSymbol, $numShares) 
	{	
		$this->conn = $conn_in;
		$user = $userID;
		$symbol = $stockSymbol;
		$shares = $numShares;
		$price = NULL;
	
		try 
		{			
			$stmt = $this->conn->prepare("CALL sp_getShareBalance(?,?)");	
			$stmt->bindParam(1, $user, PDO::PARAM_INT);
			$stmt->bindParam(2, $symbol, PDO::PARAM_STR, 12);
			$stmt->execute();				
				
			$stmt->bindColumn(1, $shareBal);
			$stmt->fetch(PDO::FETCH_BOUND);	
			
		}		
	 
		catch (PDOException $e) 
		{			
			$this->mssg = "Error: " . $e->getMessage();	
		}
	
		if ($shareBal >= $shares)
		{
			try
			{
				$stmt = $this->conn->prepare("CALL sp_insertSell(?,?,?,?)");
				$stmt->bindParam(1, $user, PDO::PARAM_INT);
				$stmt->bindParam(2, $symbol, PDO::PARAM_STR, 12);
				$stmt->bindParam(3, $shares, PDO::PARAM_INT);
				$stmt->bindParam(4, $price);
				$stmt->execute();
			
				$this->mssg = "Your order was successfully queued.";
			}
		
			catch (PDOException $e) 
			{			
				$this->mssg = "Error: " . $e->getMessage();	
			}
		}
		else
		{
			$this->mssg = "Error:  Insufficient holdings of ". $symbol. " to sell ". $shares. " shares.";
		}

		return ($this->mssg);
		
	}
}
 ?>

		