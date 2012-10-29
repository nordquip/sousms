## MAccountBalanceTestCase

### Test Case Description
* User verifies the latest balance available for their personal Account

### Pre-Requisites
* User's Mobile Platform has Internet/Cellular connection
* User has downloaded and activated SMS App (System)
* User is at the 'Balance' link
* User has linked their account to the System

### Notes
* Data from the system should bring up the latest updated account of the User
   as long as the User has an account with the System and a reliable connection to the System.

<table>
	<tr>
		<th>Inputs</th>
		<th>System Action</th>
		<th>Expected Output</th>
	</tr>
	<tr>
		<td>User does not Select 'Balance' link</td>
		<td>Device should not be marked as stolen</td>
		<td>Page remains the same</td>
	</tr>
	<tr>
		<td>User Selects 'Balance' link</td>
		<td>Device Marked as stolen</td>
		<td>Page is refreshed with the account's updated balance</td>
	</tr>
	
</table>
