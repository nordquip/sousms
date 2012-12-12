
<?php

include($_SERVER['DOCUMENT_ROOT'] . "/login.include.php"); 
include($_SERVER['DOCUMENT_ROOT'] . "/WSRequestManager.class.php");


function getProfileInfo()
{

	try {

		$retval = "";
		$reqTxt = "";
		$postData = array(
			"behavior" => "getProfileInfo",
			"token" => getLoginCookie(),
			"symbol" => "",
			"shares" => "",
			"limitprice" => "",
			"username" => "",
			"password" => "",
			"currentcash" => "");

		$ws = new WSRequestManager();
		$ws->setServiceAddress("TE");
		$respTxt = $ws->getData("jsondata=" . json_encode($postData));
		$reqTxt = $ws->getLastRequestDetails(); 

		//return $respTxt;
		//$respTxt = '{"behavior":"getProfileInfo","success":true,"statuscode":0,"statusdesc":["Good to go"],"retval":{"currentcash":8000.00,"holdings":[{"symbol":"INTC","shares":7,"value":100.00},{"symbol":"GOOG","shares":5,"value":10.50},{"symbol":"MSFT","shares":5,"value":1.25}]}}';
		$obj=json_decode($respTxt);
		
		return $obj->retval;
	} 

	catch (Exception $e) 
	{
		header('HTTP/1.1 500 Internal Server Error');
		echo "Error: " . $e->getMessage();
		exit;
	}
}

function availableBalance($profileInfo) // Displays the amount of money a user has to spend.
{	
    echo "Spending Money: $" . $profileInfo->currentcash . " <br />\n";
}

function currentHoldings($profileInfo) // Calculates and displays the value of all of the user's owned stocks.
{
	$accumulatedMoney=0;
	foreach ($profileInfo->holdings as $holdingVar)
	{
		$accumulatedMoney= ($accumulatedMoney + ($holdingVar->value*$holdingVar->shares));
	}
	echo " Current Holdings: $ $accumulatedMoney <br/> \n";
}

function displayStocks($profileInfo) // Displays a list of a user's stocks.  The stock's symbol, the quantity owned, and the stocks current value.

{
	echo "Shares &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Symbol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Value <br/> \n";
	foreach ($profileInfo->holdings as $holdingVar)
	{
		echo " $holdingVar->shares &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp; $holdingVar->symbol. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $holdingVar->value <br/> \n";	
	}// &nbsp becacuse \t did not work for me.  It should be displayed nicer.


}

function totalMoney($profileInfo) // Calculates the sum of a user's stock worth and their spending money.
{

	$accumulatedMoney=0;
	foreach ($profileInfo->holdings as $holdingVar)
	{
		$accumulatedMoney=  ($accumulatedMoney + ($holdingVar->value*$holdingVar->shares));			
	}
	$accumulatedMoney=$profileInfo->currentcash + $accumulatedMoney;
	echo "Total Combined Money: " .$accumulatedMoney. ".<br/> \n";
	
}

$profileInfo =getProfileInfo();// Sets a vairable to represent the object passed by the behavior.


?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p align ="center">User Profile Page</p>

<div id="availableBalance" align="center" style= "border:1px solid grey"> 
	<?php echo availableBalance($profileInfo) ?>
</div>

<div id="currentHoldings" align="center" style= "border:1px solid grey"> 
	<?php echo currentHoldings($profileInfo) ?>
</div>

<div id="availableBalance" align="center" style= "border:1px solid grey"> 
	<?php echo totalMoney($profileInfo) ?>
</div>

<div id="displayStock" align="center" style= "border:1px solid grey"> 
	<?php echo displayStocks($profileInfo) ?>
</div>

</body>

</html>
