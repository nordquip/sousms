<?php
//DataFeed Team
//Author: Shaun Wolff
//Script for retrieving feed, parsing the feed, Inserting data into Table for 40 stocks.
include '../service/DbConn.class.php';

$newPDO = new DbConn();
$conn = $newPDO->getConn();
$query = $conn->prepare('CALL enterTickerDataForSymbol(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

date_default_timezone_set('America/Los_Angeles');

if (date('Hi') > 355 && date('Hi') < 1730) 
{
	$tradingTime = true;
}
else
{
	$tradingTime = false;
	echo "Trading day over.\n";
}
while(file_exists('feedControl') && $tradingTime)
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

$query->execute(array($symbol,$bestAskPrice,$bestAskQty,$bestBidPrice,$bestBidQty,$close,$high,$date,$time,$ms,$lastSale,$low,$netChg,$open,$pcl,$vol,$pctChg));

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

$query->execute(array($symbol,$bestAskPrice,$bestAskQty,$bestBidPrice,$bestBidQty,$close,$high,$date,$time,$ms,$lastSale,$low,$netChg,$open,$pcl,$vol,$pctChg));

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

$query->execute(array($symbol,$bestAskPrice,$bestAskQty,$bestBidPrice,$bestBidQty,$close,$high,$date,$time,$ms,$lastSale,$low,$netChg,$open,$pcl,$vol,$pctChg));

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

$query->execute(array($symbol,$bestAskPrice,$bestAskQty,$bestBidPrice,$bestBidQty,$close,$high,$date,$time,$ms,$lastSale,$low,$netChg,$open,$pcl,$vol,$pctChg));

}
sleep(1);
if (date('Hi') > 355 && date('Hi') < 1730) 
{
	$tradingTime = true;
}
else
{
	$tradingTime = false;
	echo "Trading day over.\n";
}
}
?>