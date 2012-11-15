<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<?php

?>
<html>
<head>
	<script type="text/javascript">
	<?php
	int $availableBal;
	int $currentHoldings;
	?>
	function getBalance();
	{
		
		$availableBal = 500;
		//alert("you have " + $availableBal + " dollars to spend");
		return $availableBal;
	}
	
	function getHoldings()
	{
		int $MSFT_Shares = 5;
		int $MFST_Price= 100;
		$currentHoldings = $MSFT_Shares * $MSFT_Price;
		return $currentHoldings;
	}
	
	</script>
	
	<style>
html {text-align:center}
</style>
</head>
<body>


	<div id="totalMoney" align="center" style= "border:1px solid grey">
		
			
			You have a current balance of: $ <?php echo '<script>getBalance();</script>' ?>
			<br>
			The total worth of your current stocks is: $ <?php echo '<script>getHoldings();</script>' ?>
			
	</div>




</body>
</html>