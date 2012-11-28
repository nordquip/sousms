### TEUsersellStockTestCase

#### Description
* Selling a Stock

#### Preconditions
* User has logged in
* Tester has a stock balance to sell

#### Dialog
1. User defines amount to sell using numShares
	(unsuccessful if number of shares are negative)
	(unsuccessful if number of shares is null)
	(unsuccessful if number of shares is more than available shares to sell)
2. User clicks sell
	(unsuccessful if not enough stock to sell number of specified shares)

3. Application confirms sell

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
		<td>tester defines amount to sell as null</td>
		<td>error returned</td>
		<td>"Invalid number of shares: (empty)"</td>
	</tr>
	<tr>
		<td>tester inputs a bad symbol</td>
		<td>error returned</td>
		<td>"Invalid symbol: bad symbol"</td>
	</tr>
	<tr>
		<td>tester enters negative numer as sell amount</td>
		<td>error returned</td>
		<td>"Invalid number of shares: -1"</td>
	</tr>
	<tr>
		<td>tester enters a non number character or characters</td>
		<td>error returned</td>
		<td>"Invalid number of shares: bleargh"</td>
	</tr>
	<tr>
		<td>tester enters a positive integer for selling but more than they own</td>
		<td>error returned</td>
		<td>"Unable to verify share balance."</td>
	</tr>
	<tr>
		<th>Sunny Day</th>
	</tr>
	<tr>
		<td>tester enters a positive integer for selling</td>
		<td>Confirmation for sell displayed</td>
		<td>"Your trade has been queued"</td>
	</tr>
	
</table>