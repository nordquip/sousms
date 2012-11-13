## MAddNotificationTestCase

### Test Case Description
* Test Case for when a User wants to add a notification about a specific stock.

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
		<td>User requests a notification for stock ""</td>
		<td>System responds with an error message</td>
		<td>"Invalid Stock Symbol -> "" "</td>
	</tr>
	<tr>
		<td>User requests a notification for stock "12344555"</td>
		<td>System Responds with an error message</td>
		<td>"Invalid Characters -> "12344555" "</td>
	</tr>
	<tr>
		<td>User requests a notification for stock "#$%#"</td>
		<td>System Responds with an error message</td>
		<td>"Invalid Characters -> "#$%#" "</td>
	</tr>
	<tr>
		<td>User requests a notification for stock "GGOG"</td>
		<td>System responds with an error message</td>
		<td>"Invalid Stock Symbol -> "GGOG" "</td>
	</tr>
	<tr>
		<td>User specifies price change at "-$%$%"</td>
		<td>system responds with an error message</td>
		<td>"Invalid Price -> "-$%$%" "</td>
	</tr>
	
</table>

