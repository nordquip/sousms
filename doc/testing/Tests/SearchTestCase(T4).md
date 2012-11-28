## TESearchTestCase

### Test Case Description
* test case for stock symbol search

### Preconditions
* user has logged in

Rainy Day
<table>
	<tr>
		<th>Inputs</th>
		<th>Expected Output</th>
		<th>Actual Output</th>
	</tr>
	<tr>
		<td>tester enters stock symbol as ""</td>
		<td>error returned</td>
		<td>"Must enter stock symbol to search."</td>
	</tr>
	<tr>
		<td>tester enters stock symbol exceeding character limit</td>
		<td>error returned</td>
		<td>"Character limit exceeded; enter valid stock symbol."</td>
	</tr>
	<tr>
		<td>tester enters stock symbol as "%" or "$"</td>
		<td>error returned</td>
		<td>"Enter valid character for stock search."</td>
	</tr>
	<tr>
		<td>tester enters stock symbol as "QQQQ"</td>
		<td>error returned</td>
		<td>"Valid characters;but not real stock symbol."</td>
	</tr>
	
</table>

Sunny Day
<table>
	<tr>
		<th>Inputs</th>
		<th>Expected Output</th>
		<th>Actual Output</th>
	</tr>
	<tr>
		<td>tester enters stock symbol as "INTC"</td>
		<td>stock symbol displayed</td>
		<td>"INTC"</td>
	</tr>
	
</table>
		