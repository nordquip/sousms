## TESearchTestCase

### Test Case Description
* test case for stock symbol search
* stock symbol cannot be empty

### Variable Needed
* companyName

### Preconditions
* user has created account
* user has logged in

<table>
	<tr>
		<th>Inputs</th>
		<th>Expected Output</th>
		<th>Actual Output</th>
	</tr>
	<tr>
		<td>tester enters companyName as ""</td>
		<td>error returned</td>
		<td>"Must enter stock symbol to search."</td>
	</tr>
	<tr>
		<td>tester enters companyName exceeding character limit</td>
		<td>error returned</td>
		<td>"Character limit exceeded; enter valid stock symbol."</td>
	</tr>
	<tr>
		<td>tester enters companyName as "%" or "$"</td>
		<td>error returned</td>
		<td>"Enter valid character for stock search."</td>
	</tr>
	<tr>
		<td>tester enters companyName as "INTC"</td>
		<td>stock symbol displayed</td>
		<td>"INTC"</td>
	</tr>
	
</table>
		