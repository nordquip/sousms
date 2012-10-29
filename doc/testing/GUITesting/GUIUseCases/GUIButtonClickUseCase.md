ID
ButtonClick

Actors
User, UI

Description
Button when clicked will make an action

Preconditions
System is currently running
Button isn't currently grey

Postconditions
Stated operation occurs
If stated operation can't be executed, error message appears

Dialog
1.  User selects button
2. Check state of button
       If button is grayed, nothing happens
           Back to 1.
       Else execute button
3. system executes requested operation
        If system unable to execute operation display error message
        else display result of operation
4. user closes system or returns to step one
