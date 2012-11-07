## MSearchTestCase

### Test Case Description
* Test Case for when a User is searching for stocks by stock symbol.

### Pre-Requisites
* User is verified at log in.

###Rainy Day Scenario

<table>
	<tr>
		<th>Inputs</th>
		<th>System Action</th>
		<th>Expected Output</th>
	</tr>
	<tr>
		<td>User enters ""</td>
		<td>System responds with an error message</td>
		<td>"Must enter valid Stock Symbol"</td>
	</tr>
	<tr>
		<td>User enters too many characters</td>
		<td>System Responds with an error message</td>
		<td>"Character exceeded limit - must enter valid stock Symbol"</td>
	</tr>
	<tr>
		<td>User enters non-recognizable characters</td>
		<td>System responds with an error message</td>
		<td>"Must enter valid Stock Symbol"</td>
	</tr>
	
</table>
