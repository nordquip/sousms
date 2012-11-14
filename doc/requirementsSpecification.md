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

## Functional Requiremnts

button        	user must click button
	
  button.action		  user must click button for stated action to occur

  button.name  		  ui must display name of button

  button.initiate 	ui must initiate acion stated in name

  button.error  		ui must display error message if button fails requested operation

  button.animation 	ui must inform user visually of button click with click animation


openclose   user must close system

  openclose.exit 	  user must ask system to close
  
  openclose.process ui must ensure all processes are closed

  openclose.error	  ui must display error message if the process fails

  openclose.logout  ui must ensure UA saves last known good state of user


