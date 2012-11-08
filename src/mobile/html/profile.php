
<?php
if (isset ($_POST['availableBal'] )) 
{
	$availableBal = $_POST['availableBal'];
	if (!empty($availableBal)) 
	{
	//$totalHoldings = $_Post('totalHoldings'); //Not POST, but the function call to calculate it
	$sentence = $availableBal.' is how much money you have to spend on stocks.';
	}
	else
	{
		echo 'Enter your available balance.';
	}
}

?>
<html>
<head>
<style>
html {text-align:center}
</style>
</head>
<body>


<p>

</p>


<form action = "profile.php" method="POST">
How much money do you have to spend?<br><input type="text" name="availableBal" ><br>
<input type="submit" value="Submit">
</form>
<strong><?php echo $availableBal ?></strong>
<textarea rows=20 col = 25> Total spending money: $availableBal
Total worth of stocks: $totalHoldings
You own this stock: MSFT </textarea> 

</body>
</html>