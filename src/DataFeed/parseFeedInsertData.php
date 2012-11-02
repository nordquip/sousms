<?php
//DataFeed Team
//Author: Shaun Wolff
//Script for retrieving feed, parsing the feed, Inserting data into Database for 40 stocks.

//NOTE: Will need correct DB host, username, password, DB Name and Table.
//NOTE: Need to setup with crontab to run this script when the markets are trading and stop it when they close.

$host = "localhost"; //Replace
$username = "root"; //Replace
$password = ""; //Replace
$DB = "test1"; //Replace
$DBTB = "feed"; //Replace


$con = mysql_connect($host, $username, $password );
$db = mysql_select_db("$DB", $con);
while(true)
{
	
	$url = "https://basicapp.nasdaqomx.com/BasicDataXML/getBasicData?symbolsCsvList=AAPL,ADBE,ADSK,ALU,AMZN,ATVI,AXP,CAKE,CMCSA,COKE";
	$xml = simplexml_load_file($url);

	foreach($xml->dataItems as $dataItems)
	{
		$symbol=$dataItems->symbol;
		$bestAskPrice=$dataItems->bestAskPrice;
		$bestAskQty=$dataItems->bestAskQty;
		$bestBidPrice=$dataItems->bestBidPrice;
		$bestBidQty=$dataItems->bestBidQty;
		$close=$dataItems->close;
		$high=$dataItems->high;
		$date=$dataItems->date;
		$tTime=$dataItems->time;
		$tMs=preg_split('/\./', $tTime); 
		$time=$tMs[0];
		$ms=$tMs[1];
		$lastSale=$dataItems->lastSale;
		$low=$dataItems->low;
		$netChg=$dataItems->netChg;
		$open=$dataItems->open;
		$pcl=$dataItems->pcl;
		$vol=$dataItems->vol;
		$pctChg=$dataItems->pctChg;
	
		$sql = "CALL enterTickerDataForSymbol('$symbol','$bestAskPrice','$bestAskQty','$bestBidPrice','$bestBidQty','$close','$high','$date','$time','$ms','$lastSale','$low','$netChg','$open','$pcl','$vol','$pctChg')";
		
		$query = mysql_query($sql);
		if (!$query)
		{
			echo ('Error: ' .mysql_error());
		}
		else
		{
			echo "Record added";
			echo "\n";
		}
	}

	$url = "https://basicapp.nasdaqomx.com/BasicDataXML/getBasicData?symbolsCsvList=CSCO,DIS,DNKN,EBAY,ERTS,FB,GE,GOOG,GRMN,HAS";
	$xml = simplexml_load_file($url);

	foreach($xml->dataItems as $dataItems)
	{
		$symbol=$dataItems->symbol;
		$bestAskPrice=$dataItems->bestAskPrice;
		$bestAskQty=$dataItems->bestAskQty;
		$bestBidPrice=$dataItems->bestBidPrice;
		$bestBidQty=$dataItems->bestBidQty;
		$close=$dataItems->close;
		$high=$dataItems->high;
		$date=$dataItems->date;
		$tTime=$dataItems->time;
		$tMs=preg_split('/\./', $tTime); 
		$time=$tMs[0];
		$ms=$tMs[1];
		$lastSale=$dataItems->lastSale;
		$low=$dataItems->low;
		$netChg=$dataItems->netChg;
		$open=$dataItems->open;
		$pcl=$dataItems->pcl;
		$vol=$dataItems->vol;
		$pctChg=$dataItems->pctChg;
		
		$sql = "CALL enterTickerDataForSymbol('$symbol','$bestAskPrice','$bestAskQty','$bestBidPrice','$bestBidQty','$close','$high','$date','$time','$ms','$lastSale','$low','$netChg','$open','$pcl','$vol','$pctChg')";
		
		$query = mysql_query($sql);
		if (!$query)
		{
			echo ('Error: ' .mysql_error());
		}
		else
		{
			echo "Record added";
			echo "\n";
		}
	}
	
	$url = "https://basicapp.nasdaqomx.com/BasicDataXML/getBasicData?symbolsCsvList=HSY,HOTT,INTC,JBLU,MON,MSFT,NFLX,NVDA,ORCL,PBG";
	$xml = simplexml_load_file($url);
	
	foreach($xml->dataItems as $dataItems)
	{
		$symbol=$dataItems->symbol;
		$bestAskPrice=$dataItems->bestAskPrice;
		$bestAskQty=$dataItems->bestAskQty;
		$bestBidPrice=$dataItems->bestBidPrice;
		$bestBidQty=$dataItems->bestBidQty;
		$close=$dataItems->close;
		$high=$dataItems->high;
		$date=$dataItems->date;
		$tTime=$dataItems->time;
		$tMs=preg_split('/\./', $tTime); 
		$time=$tMs[0];
		$ms=$tMs[1];
		$lastSale=$dataItems->lastSale;
		$low=$dataItems->low;
		$netChg=$dataItems->netChg;
		$open=$dataItems->open;
		$pcl=$dataItems->pcl;
		$vol=$dataItems->vol;
		$pctChg=$dataItems->pctChg;
		
		$sql = "CALL enterTickerDataForSymbol('$symbol','$bestAskPrice','$bestAskQty','$bestBidPrice','$bestBidQty','$close','$high','$date','$time','$ms','$lastSale','$low','$netChg','$open','$pcl','$vol','$pctChg')";
		
		$query = mysql_query($sql);
		if (!$query)
		{
			echo ('Error: ' .mysql_error());
		}
		else
		{
			echo "Record added";
			echo "\n";
		}
	}
	
	$url = "https://basicapp.nasdaqomx.com/BasicDataXML/getBasicData?symbolsCsvList=QCOM,RCL,SBUX,SIRI,SPLS,TTWO,TXN,V,YHOO,SNE";
	$xml = simplexml_load_file($url);
	
	foreach($xml->dataItems as $dataItems)
	{
		$symbol=$dataItems->symbol;
		$bestAskPrice=$dataItems->bestAskPrice;
		$bestAskQty=$dataItems->bestAskQty;
		$bestBidPrice=$dataItems->bestBidPrice;
		$bestBidQty=$dataItems->bestBidQty;
		$close=$dataItems->close;
		$high=$dataItems->high;
		$date=$dataItems->date;
		$tTime=$dataItems->time;
		$tMs=preg_split('/\./', $tTime); 
		$time=$tMs[0];
		$ms=$tMs[1];
		$lastSale=$dataItems->lastSale;
		$low=$dataItems->low;
		$netChg=$dataItems->netChg;
		$open=$dataItems->open;
		$pcl=$dataItems->pcl;
		$vol=$dataItems->vol;
		$pctChg=$dataItems->pctChg;
		
		$sql = "CALL enterTickerDataForSymbol('$symbol','$bestAskPrice','$bestAskQty','$bestBidPrice','$bestBidQty','$close','$high','$date','$time','$ms','$lastSale','$low','$netChg','$open','$pcl','$vol','$pctChg')";
		
		$query = mysql_query($sql);
		if (!$query)
		{
			echo ('Error: ' .mysql_error());
		}
		else
		{
			echo "Record added";
			echo "\n";
		}
	}
	sleep(1);
}
?>