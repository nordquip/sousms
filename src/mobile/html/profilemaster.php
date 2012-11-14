<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php

//}xmlns="http://www.w3.org/1999/xhtml"


?>
<html>
<head>

	<script type="text/javascript">
	int $availableBal;
	int $currentHoldings;
	function int getBalance();
	{
		
		$availableBal = 500;
		//alert("you have " + $availableBal + " dollars to spend");
		return $availableBal;
	}
	
	function void getHoldings()
	{
		int $MSFT_Shares = 5;
		int $MFST_Price= 100;
		int $currentHoldings = $MSFT_Shares * $MSFT_Price;
		//return $currentHoldings;
	}
	
	</script>
	<style>
html {text-align:center}
</style>
</head>
<body>


	<div id="totalMoney" align="center" style= "border:1px solid grey">
		
			<button onclick="Fuck This Shit">Check Balance</button>
			You have a current balance of: $ <?php echo getBalance(); ?>
			<br>
			The total worth of your current stocks is: $ <?php echo getHoldings(); ?>
			
	</div>




</body>
</html>