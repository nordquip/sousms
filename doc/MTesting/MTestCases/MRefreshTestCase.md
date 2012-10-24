## MRefreshTestCase

### Test Case Description
* User synchronizes Home Page for latest Updates with Live Feed

### Pre-Requisites
* User's Mobile Platform has Internet/Cellular connection
* User has downloaded and activated SMS App (System)
* User is at a 'Refresh' location

### Notes
* Data will be in synced as long as live feed is active and User has reliable connection

<table>
	<tr>
		<th>Inputs</th>
		<th>System Action</th>
		<th>Expected Output</th>
	</tr>
	<tr>
		<td>User does not Select Refresh from Home Page</td>
		<td>Device should not be marked as stolen</td>
		<td>Page remains the same</td>
	</tr>
	<tr>
		<td>User Selects Refresh from Home Page</td>
		<td>Device Marked as stolen and Synced Items should be synced</td>
		<td>Synced Items include Stock: Price, Symbol, Quantity, History</td>
	</tr>
	
</table>
