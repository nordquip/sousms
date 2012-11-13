## MUserTradeSellTestCase

### Test Case Description
* Test Case for when a User wants to sell stocks.
* User enters their desired quantity of specified stock.
* System responds with either an error message (unsuccessful) or confirmation (successful).

### Pre-Requisites
* User is verified at log in.
* User has selected the specific stock they wish to sell from their account.

###Rainy Day

<table>
	<tr>
		<th>Inputs</th>
		<th>System Action</th>
		<th>Expected Output</th>
	</tr>
	<tr>
		<td>User enters desired quantity greater than avaliable shares</td>
		<td>System sends error message</td>
		<td>"Quantity desired is un-available -> "Desired Quantity" vs. "Available Quantity""</td>
	</tr>
	<tr>
		<td>User enters ""</td>
		<td>System sends error message</td>
		<td>"Invalid Quantity -> "" must be greater than 0"</td>
	</tr>
	<tr>
		<td>User enters "0"</td>
		<td>System sends error message</td>
		<td>"Invalid Quantity -> "0" quantity must be greater than 0 "</td>
	</tr>
	<tr>
		<td>User enters "-5"</td>
		<td>System sends error message</td>
		<td>"Invalid Quantity -> "-5" quantity must be greater than 0"</td>
	</tr>
	<tr>
		<td>User enters "#$%#"</td>
		<td>System sends error message</td>
		<td>"Invalid Characters -> "#$%#" is not recognizable"</td>
	</tr>
</table>
