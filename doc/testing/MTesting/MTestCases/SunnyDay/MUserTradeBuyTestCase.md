## MUserTradeBuyTestCase

### Test Case Description
* Test Case for when a User wants to buy stocks.

### Pre-Requisites
* User is verified at log in.

###Sunny Day

<table>
	<tr>
		<th>Inputs</th>
		<th>System Action</th>
		<th>Expected Output</th>
	</tr>
	<tr>
		<td>User enters desired quantity of stock</td>
		<td>If successful System sends confirmation</td>
		<td>Balance is Decremented, Stocks are added to Account</td>
	</tr>
	<tr>
		<td>User enters ""</td>
		<td>System does not respond</td>
		<td>Balance remains the same, No new stocks are added</td>
	</tr>
	
</table>
