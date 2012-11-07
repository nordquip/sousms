<?php
// Prototype php teTest for calling MarketBuy
// Written by Robert Davee 11/6/2012

include '../te/MarketBuy.php';

function callTeBuy ()
{
	$newMarketBuy = new MarketBuy(1,"INTC",3);
	$newMarketBuy.doIt();
	
}

?>