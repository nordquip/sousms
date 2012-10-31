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
3. User confirms buy
4. Application confirms buy

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
		<td>tester defines amount to buy as ""</td>
		<td>error returned</td>
		<td>"Must enter a positive integer."</td>
	</tr>
	<tr>
		<td>tester enters negative numer as buy amount</td>
		<td>error returned</td>
		<td>"Must enter a positive integer."</td>
	</tr>
	<tr>
		<td>tester enters a non number character or characters</td>
		<td>error returned</td>
		<td>"Must enter a positive integer."</td>
	</tr>
	<tr>
		<td>tester enters a positive integer for buying but not enough funds for amount specified</td>
		<td>error returned</td>
		<td>"Insufficient fund to buy stock"</td>
	</tr>
	<tr>
		<th>Sunny Day</th>
	</tr>
	<tr>
		<td>tester enters a positive integer for selling</td>
		<td>Confirmation for sell displayed</td>
		<td>"Confirm sell of 'amount' of 'stock'</td>
	</tr>
	
</table>