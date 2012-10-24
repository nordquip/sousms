## MRefreshTestCase

### Test Case Description
* User synchronizes Home Page for latest Updates with Live Feed

### Pre-Requisites
* User's Mobile Platform has Internet/Cellular connection
* User has downloaded and activated SMS App
* User is at a 'Refresh' location

### Notes
* Data will be in synced as long as live feed is active and user has reliable connection

<table>
	<tr>
		<th>Inputs</th>
		<th>Expected Output</th>
		<th>System Output</th>
	</tr>
	<tr>
		<td>User does not Selects Refresh from Home Page</td>
		<td>Device should not be marked as stolen</td>
		<td>Page remains the same</td>
	</tr>
	<tr>
		<td>User selects Refresh from Home Page</td>
		<td>Device Marked as stolen</td>
		<td>Synced Items should be synced: Stocks</td>
	</tr>
	
</table>
