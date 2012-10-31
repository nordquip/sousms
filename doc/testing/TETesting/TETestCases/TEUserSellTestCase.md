### TEUsersellStockTestCase

#### Description
* Selling a Stock

#### Preconditions
* User has logged in
* Tester has a stock balance to sell

#### Dialog
2. User defines amount to sell using numShares
	(unsuccessful if number of shares are negative)
	(unsuccessful if number of shares is null)
	(unsuccessful if number of shares is more than available shares to sell)
3. User clicks sell
	(unsuccessful if not enough stock to sell number of specified shares)
4. User confirms sell
4. Application confirms sell

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
		<td>"Must enter a positive integer."</td>
	</tr>
	<tr>
		<td>tester enters negative numer as sell amount</td>
		<td>error returned</td>
		<td>"Must enter a positive integer."</td>
	</tr>
	<tr>
		<td>tester enters a non number character or characters</td>
		<td>error returned</td>
		<td>"Must enter a positive integer."</td>
	</tr>
	<tr>
		<td>tester enters a positive integer for selling but more than they own</td>
		<td>error returned</td>
		<td>"Insufficient amount of specified stock"</td>
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