UILOGOUTTestCase

Description
User logs out of system

Variables Needed
UserName - Username used to login to system
Password - Password associated with system

Preconditions
User is currently logged in
User is on main page

Dialog
User Selects Logout button qt top of main page
	(succesful if login screen appears and ui shows user as logged out)
	(unsuccessful if error code appears or user is shown as logged in)