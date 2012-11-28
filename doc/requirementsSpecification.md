SOU Stock Market Simulator Requirements Specification
# Introduction
This software simulates a trading platform where authorized users can 
paper trade stocks.
# High-level description
Provides a general description of the software product, its major functions, user characteristics, major constraints, and dependencies.
# Detailed requirements 
## Functional
detailed description of each functional requirement by input, process, and output; 
## Interfaces
descriptions of interfaces that include user interfaces, system interfaces, network interfaces, and hardware interfaces; 
## Security
## Performance
a detailed description of performance requirements; 
## Constraints
a list of design constraints such as standards or hardware limitations;
## Availability / Recoverability
Requirements for uptime and restoration procedures.

## Pete's new header
I owe you a review of this doc.
Perhaps we should all review it.

## Functional Requirements

**Req 1: Password change Functionality**
  
<table>
	<tr>
		<td>UA.Auth</td>
		<td>User must login before submitting request</td>
	</tr>
	<tr>
		<td>UA.Request.Change</td>
		<td>User must select change password.</td>
	</tr>
	<tr>
		<td>UA.Enter.Info</td>
		<td>User must enter email and current password.</td>
	</tr>
	<tr>
		<td>UA.Enter.New.Info</td>
		<td>User must enter new password</td>
	</tr>
	<tr>
		<td>UA.Confirm</td>
		<td>User must enter new password</td>
	</tr>
	<tr>
		<td>UA.Updated</td>
		<td>If Successful System must update user account</td>
	</tr>
</table>

**Req 2: Securities Info Functionality**
  
<table>
	<tr>
		<td>Security.Info.Auth</td>
		<td>User must login succesfully</td>
	</tr>
	<tr>
		<td>Security.Info.display</td>
		<td>System will display symbols owned by accound holder</td>
	</tr>
</table>

**Req 3: Button Functionality**

<table>
	<tr>
		<td>Button</td>
		<td>user must click button</td>
	</tr>
	<tr>
		<td>Button.Action</td>
		<td>user must click button for stated action to occur</td>
	</tr>
	<tr>
		<td>Button.Name</td>
		<td>ui must display name of button</td>
	</tr>
	<tr>
		<td>Button.Initiate</td>
		<td>ui must initiate action stated in name</td>
	</tr>
	<tr>
		<td>Button.Error</td>
		<td>ui must display error message if button fails requested operation</td>
	</tr>
	<tr>
		<td>Button.Animation</td>
		<td>ui must inform user visually of button click with click animation</td>
	</tr>
</table>

**Req 4: Open and Close Functionality**

<table>
	<tr>
		<td>Openclose</td>
		<td>user must close system</td>
	</tr>
	<tr>
		<td>Openclose.Exit</td>
		<td>user must ask system to close</td>
	</tr>
	<tr>
		<td>Openclose.Process</td>
		<td>ui must ensure all processes are closed</td>
	</tr>
	<tr>
		<td>Openclose.Error</td>
		<td>ui must display error message if the process fails</td>
	</tr>
	<tr>
		<td>Openclose.Logout</td>
		<td>ui must ensure UA saves last known good state of user</td>
	</tr>
</table>

**Req 5: Stock Search Functionality**

<table>
	<tr>
		<td>Search</td>
		<td>User must enter valid stock symbol to search</td>
	</tr>
	<tr>
		<td>Search.Select</td>
		<td>User must select desired stock from given list</td>
	</tr>
	<tr>
		<td>Search.CheckSym</td>
		<td>System must inform user if they enter invalid stock symbol</td>
	</tr>
	<tr>
		<td>Search.Retry</td>
		<td>System must give user unlimited attempts for entry of valid stock symbol</td>
	</tr>
</table>

**Req 6: Trade/Buy Functionality**

<table>
	<tr>
		<td>Trade.Auth</td>
		<td>User must login before submitting Trade</td>
	</tr>
	<tr>
		<td>Trade.Buy.Stock</td>
		<td>User must select a valid stock from known stock list</td>
	</tr>
	<tr>
		<td>Trade.Buy.Quantity</td>
		<td>User must enter a desired amount of shares that must be greater than "0"</td>
	</tr>
	<tr>
		<td>Trade.Buy.Insufficient</td>
		<td>System must inform User if User account balance is insufficient for trade</td>
	</tr>
	<tr>
		<td>Trade.Buy.Retry</td>
		<td>System must give the User unlimited attempts to enter a sufficient quantity</td>
	</tr>
	<tr>
		<td>Trade.Buy.Confirm</td>
		<td>If Successful System must update User account</td>
	</tr>
</table>

**Req 7: Trade/Sell Functionality**

<table>
	<tr>
		<td>Trade.Auth</td>
		<td>User must login before submitting Trade</td>
	</tr>
	<tr>
		<td>Trade.Sell.Stock</td>
		<td>User must select an owned stock from User account</td>
	</tr>
	<tr>
		<td>Trade.Sell.Quantity</td>
		<td>User must enter a desired amount of shares that must be greater than "0"</td>
	</tr>	
	<tr>
		<td>Trade.Sell.Invalid</td>
		<td>System must inform User if the specified quantity is greater than what is available</td>
	</tr>
	<tr>
		<td>Trade.Sell.Retry</td>
		<td>System must give the User unlimited attempts to enter a quantity and submit for trade</td>
	</tr>
	<tr>
		<td>Trade.Sell.Confirmed</td>
		<td>If Successful, System must update User account</td>
	</tr>
</table>
