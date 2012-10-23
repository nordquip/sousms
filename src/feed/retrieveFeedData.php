<?php
/*
 * retrieves tick data from the nasdaq feed
 * see <http://www.nasdaqtrader.com/content/technicalsupport/specifications/dataproducts/BASIC_Web_Service_1.0.pdf>
 * for URL to call and format of data retrieved.
 * 
 * Pete Nordquist 121019
*/

	// include the php utilities
	// NOTE: unlike the paths in sql scripts, php paths are
	// relative to the directory in which the php file resides
	include('../shared/dbutil.php');
	
	// simulate insertion of a few records
	callAndPrint("call storeTickForSymbol('INTC', 21.50)");


?>
