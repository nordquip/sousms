<?php
/*
 *MarketSell.class.php
 *
 *Calls insertSell.sql to add a 'Sell' record to OpenOrders.sql
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
		$this->user = $userID;
		$this->symbol = $stockSymbol;
		$this->shares = $numShares;
		$this->price = NULL;
		$this->shareBal;
		try 
		{			
			$stmt = $this->conn->prepare("CALL sp_getShareBalance(?)");				
			$stmt->execute($this->user, $this->symbol);				
						
			$stmt->bindColumn(1, $this->shareBal);						
			$stmt->fetch(PDO::FETCH_BOUND);							
		}		
	 
		catch (PDOException $e) 
		{			
			$this->mssg = "Error: " . $e->getMessage();	
		}
	
		if ($this->shareBal >= $this->shares)
		{
			try
			{
				$stmt = $this->conn->prepare("CALL sp_InsertSell(?,?,?,?)");				
				$stmt->execute($this->user, $this->symbol, $this->shares, $this->price);
			
				$this->mssg = "Your order was successfully queued.";
			}
		
			catch (PDOException $e) 
			{			
				$this->mssg = "Error: " . $e->getMessage();	
			}
		}
		else
		{
			$this->mssg = "Error:  Insufficient holdings of ", $this->symbol, " to sell ", $this->shares, " shares.";
		}
		return ($this->mssg);
	}
}
 ?>

		