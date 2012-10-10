### UserAddNotification

#### Actors
* Users

#### Description
* User adds a notifation that they will recieve

#### Preconditions
* User has downloaded the mobile app.
* User is logged in.

#### Postconditions
* Successful - Notifications was added
* Unsuccessful - Notifications was not added

#### Dialog
1. User requests to add a notification
2. User specifies which stock they wish to be notified on
3. User specifies the price limit that they will be notified for
4. User requests to apply changes
5. System displays confirmation
6. Postcondition Successful 



### UserChangesNotifications

#### Actors
* Users

#### Description
* User will be able to change what he/she is being notified on.

#### Preconditions
* User has downloaded the mobile app.
* User is logged in.
* User has added a notification.

#### Postconditions
* Successful - Notifications were changed
* Unsuccessful - No changes were made to notifications

#### Dialog
1. User requests to change notifications
2. User specifies which stock notification to change
3. User specifies the price limit of when they wish to be notified
4. User requests to apply changes
5. System displays confirmation
6. Postcondition Successful

### UserRemovesNotification

#### Actors
* Users

#### Description
* User removes a notifation

#### Preconditions
* User has added a notification

#### Postconditions
* Successful - Notifications was removed
* Unsuccessful - Notifications was not removed

#### Dialog
1. User requests to delete a notification
2. User specifies which stock notification they want to delete
3. User requests to apply changes
4. System displays confirmation
5. Postcondition Successful 


### UserRecievesMessageForNotification

#### Actors
* System

#### Description
* System sends a message to the user informing them that a price limit had been met in a notification

#### Preconditions
* Notification for a particular stock had been added
* The price limit for the notification had been hit

#### Postconditions
* Successful - Message was received
* Unsuccessful - Message was not received

#### Dialog
1. System sends a Message to user
2. System deletes notifcation
3. Postcondition Successful