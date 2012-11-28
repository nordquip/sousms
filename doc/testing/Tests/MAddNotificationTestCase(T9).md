## MHomeTestCase

### Test Case Description
* Test Case for when a User wants to be directed back to the home page.

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
		<td>User selects Home tab</td>
		<td>System responds with an error message</td>
		<td>Cannot find /home.html</td>
	</tr>
	<tr>
		<td>User selects Home tab</td>
		<td>System does not respond</td>
		<td>No action</td>
	</tr>
</table>

###Sunny Day	
<table>
         <tr>
		<th>Inputs</th>
		<th>System Action</th>
		<th>Expected Output</th>
	 </tr>
         <tr>
		<td>User selects Home tab</td>
		<td>System Responds by directing them to the Home page</td>
		<td>User is back at Home page</td>
	</tr>
</table>

