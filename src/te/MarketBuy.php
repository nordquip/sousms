<?php

/******************************************************************
written by Ben Harris, November 01, 2012
CS469 - SOUSMS - Trade Engine Team - Market Buy Web Service (rough)
******************************************************************/

class MarketBuy {
	
	private $uid, $stsym, $stpr, $nust;
	
	public function __construct($usrid, $stosymb, $numsto) {
		// put constructor parameters into the object variables
		$this->uid = $usrid; // user id - integer (probably a primary key in the DB)
		$this->stsym = $stosymb; // stock symbol - string
		$this->nust = $numsto; // number of stock - integer
	} // end constructor
	
	private function updatePrice() {
		$this->stpr = 1.5; // gets the price of this stock from the DB (instead of the constant)
	} // end updatePrice()
	
	private function getFunds() {
		$csh = 30; // get the user's cash balance from the DB (instead of the constant)
		return $csh; // returns user's cash balance (float or double) to caller
	} // end getFunds()
	
	public function doIt() {
		$rtrn = "ERROR: insuffient funds"; // variable to hold result comment, default is "failure"
		$cshbal = $this->getFunds(); // calls getFunds() to update available (or actual) cash  
		$this->updatePrice(); // updates buy price with most current stock price from DB
		$cshreq = $this->stpr * $this->nust; // does math to calculate amount needed for buy
		if ($cshbal >= $cshreq) { // conditional if cash balance is at least the buy amount
			// rather than print - do stored procedure for the "buy", using the MarketBuy object "attributes":
			echo $this->uid, "\n"; // prints MarketBuy attribute (variable) for user's id
			echo $this->stsym, "\n"; // prints MarketBuy attribute (variable) for stock symbol
			echo $this->stpr, "\n"; // prints MarketBuy attribute (variable) for stock price
			echo $this->nust, "\n"; // prints MarketBuy attribute (variable )for the number of stocks to buy
			// if the MarketBuy is going into a queue, an immediate deduction from the "available balance" in 
			// the DB is needed here as well, while the "actual balance" will be deducted when 
			// the MarketBuy is "un-queued" from the open orders
			$rtrn = "QUEUED: market buy"; // sets successful result comment
		} // end if
		echo $rtrn; // displays result comment
	} // end doIt()
	
}; // end class MarketBuy

/*
Questions for Jeff M.:
	-php-
1. how to restrict or require a certain data type in a variable or parameter
2. embedding or calling stored procedures, and putting results in a variable
*/

?>

