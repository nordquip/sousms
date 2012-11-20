<?php

/******************************************************************
TradeEngineBuy.class.php
Originally written by Ben Harris, November 01, 2012
Modified by Jeff Miller, 2012-11-19
CS469 - SOUSMS - Trade Engine Team - Buy Web Service
******************************************************************/

class TradeEngineBuy {

	public function buy($conn, $uid, $symid, $numsto, $lipr) {
		$rtrn = "";
		$cshbal = 0;
		$stpr = 0;
		$symbol = "";
		
		try {
			$stmt = $conn->prepare("CALL sp_getCash(?)");
			$stmt->execute(array($uid));
			$stmt->bindColumn(1, $cshbal);
			$stmt->fetch(PDO::FETCH_BOUND);
		} catch (PDOException $e) { $rtrn .= "ERROR retrieving cash balance: " . $e->getMessage();	}
		try {
			$stmt = $conn->prepare("CALL sp_getPrice(?)");
			$stmt->execute(array($symid));
			if($stmt->rowCount() > 0) {
				$stmt->bindColumn(1, $stpr);
				$stmt->bindColumn(2, $symbol);
				$stmt->fetch(PDO::FETCH_BOUND);
			} else {
				$rtrn .= "ERROR: Invalid stock symbol ID $symid.";
			}
		} catch (PDOException $e) { $rtrn .= "ERROR retrieving latest price for $symid: " . $e->getMessage();	}
		
		if ($stpr > 0) {
			$cshreq = $stpr * $numsto;
			if ($cshbal >= $cshreq) { // if cash balance is at least the buy amount
				try	{
					$stmt = $conn->prepare("CALL sp_insertBuy(?,?,?,?)");
					$stmt->execute(array($uid, $symid, $numsto, $lipr));
					$stmt->bindColumn(1, $rtrn);
					$stmt->fetch(PDO::FETCH_BOUND);
				} catch (PDOException $e) { $rtrn .= "ERROR: " . $e->getMessage(); }
			} else {
				$rtrn .= "ERROR: Insufficient Funds \$" . number_format($cshbal, 2) .
					" to buy \$" . number_format($cshreq, 2) .
					" worth of \"$symbol\".";
			}
		}
		return $rtrn;
	}
	
}; // end class Buy
?>