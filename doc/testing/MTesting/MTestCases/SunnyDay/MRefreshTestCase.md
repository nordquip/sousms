## MRefreshTestCase

### Test Case Description
* User synchronizes Home Page for latest Updates. 

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
		<td>User does not Select Refresh from Home Page</td>
		<td>System Idle</td>
		<td>Page remains the same</td>
	</tr>
	<tr>
		<td>User Selects Refresh from Home Page</td>
		<td>System Responds by syncing Items</td>
		<td>Synced Items include Stock: Price, Symbol, Quantity, History</td>
	</tr>
	
</table>
