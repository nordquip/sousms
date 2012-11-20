<?php

/******************************************************************
written by Ben Harris, November 01, 2012
CS469 - SOUSMS - Trade Engine Team - Market Buy Web Service
******************************************************************/

class MarketBuy {

	public function buy($conn, $uid, $symid, $numsto) {
		$rtrn = "";
		$cshbal = 0; 
		$lipr = NULL;
		$stpr = 0;
		
		try {
			$stmt = $conn->prepare("CALL sp_getCashBalance(?)");
			$stmt->execute(array($uid));
			$stmt->bindColumn(1, $cshbal);
			$stmt->fetch(PDO::FETCH_BOUND);
		} catch (PDOException $e) { $rtrn .= "ERROR retrieving cash balance: " . $e->getMessage();	}
		try {
			$stmt = $conn->prepare("CALL sp_getPrice(?)");
			$stmt->execute(array($symid));
			$stmt->bindColumn(1, $stpr);
			$stmt->fetch(PDO::FETCH_BOUND);
		} catch (PDOException $e) { $rtrn .= "ERROR retrieving latest price for $symid : " . $e->getMessage();	}
		
		$cshreq = $stpr * $numsto;
		if ($cshbal >= $cshreq) { // if cash balance is at least the buy amount
			try	{
				$stmt = $conn->prepare("CALL sp_insertBuy(?,?,?,?)");
				$stmt->execute(array($uid, $symid, $numsto, $lipr));
				$stmt->bindColumn(1, $rtrn);
				$stmt->fetch(PDO::FETCH_BOUND);
				if ($stmt->rowCount() > 0)	$rtrn .= "Your BUY was successfully queued.";
				else $rtrn .= "ERROR:  BUY was not successfully queued.";
			} catch (PDOException $e) { $rtrn .= "ERROR: " . $e->getMessage(); }
		} else {
			rtrn .= "ERROR: Insufficient Funds";
		}
		return $rtrn;
	}
	
}; // end class MarketBuy



?>

