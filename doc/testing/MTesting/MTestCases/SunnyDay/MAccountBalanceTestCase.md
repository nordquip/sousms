## MAccountBalanceTestCase

### Test Case Description
* User verifies the latest balance available for their personal .

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
		<td>User does not Select Balance</td>
		<td>System does not respond</td>
		<td>Page remains the same</td>
	</tr>
	<tr>
		<td>User Selects Balance</td>
		<td>System Responds</td>
		<td>Page is refreshed with the account's updated balance</td>
	</tr>
	
</table>
