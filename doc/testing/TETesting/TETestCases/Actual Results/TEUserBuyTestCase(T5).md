### TEUserBuyStockTestCase

#### Description
* buying a stock

#### Preconditions
* User has logged in
* Tester has a balance

#### Dialog
1. User defines amount to purchase using numShares
	(unsuccessful if number of shares are negative)
	(unsuccessful if number of shares is null)
	(unsuccessful if number of shares has non number characters)
2. User clicks buy
	(unsuccessful if not enough funds to purchase shares)
3. Application confirms buy

<table>
	<tr>
		<th>Rainy Day</th>
	</tr>
	<tr>
		<th>Inputs</th>
		<th>Expected Output</th>
		<th>Actual Output</th>
	</tr>
	<tr>
		<td>tester defines null amount to buy</td>
		<td>error returned</td>
		<td>"Invalid number of shares: (empty)"</td>
	</tr>
	<tr>
		<td>tester inputs a bad symbol</td>
		<td>error returned</td>
		<td>N/A in currnet build. Can only enter invalid symbols in test.php. Returns: "Symbol \"bad symbol\" not found."</td>
	</tr>
	<tr>
		<td>tester enters negative numer as buy amount</td>
		<td>error returned</td>
		<td>"Invalid number of shares: -5"</td>
	</tr>
	<tr>
		<td>tester enters a non number character or characters</td>
		<td>error returned</td>
		<td>"Invalid number of shares: bleargh"</td>
	</tr>
	<tr>
		<td>tester enters a positive integer for buying but not enough funds for amount specified</td>
		<td>error returned</td>
		<td>No error, but buy does not complete.</td>
	</tr>
	<tr>
		<th>Sunny Day</th>
	</tr>
	<tr>
		<td>tester enters a positive integer for selling</td>
		<td>Confirmation for buy displayed</td>
		<td>"Your trade has been queued"</td>
	</tr>
	
</table>