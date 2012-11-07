<?php
// Prototype php TETest for calling MarketSearch (doesn't exist
//quite yet but will test when made) Author: Michael Ruppert
//November 7th, 2012

include '../te/MarketSearch.php';

function callTESearch ()
{
	$newMarketSearch = new MarketSearch("INTC");
	$newMarketSearch.doIt();
	
}

?>