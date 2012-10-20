### UserAddNotification

#### Actors
* Users
* System

#### Description
* User adds a notifation that they want to receive

#### Preconditions
* User has downloaded the mobile app.
* User is logged in.

#### Postconditions
* Successful - Notification(s) was/were added
* Unsuccessful - Notification(s) was/were not added

#### Dialog
1. User is in notification settings
2. User requests to add a notification
3. User specifies which stock they wish to be notified on
4. User specifies the price range +/- a percentage or dollar amount that they will be notified for
5. User requests to apply changes
6. System confirms accept or cancel of addNotification
   + If cancel, postcondition unsuccessful
7. System displays confirmation
8. Postcondition Successful



### UserChangesNotifications

#### Actors
* Users
* System

#### Description
* User will be able to change what he/she is being notified on.

#### Preconditions
* See UserAddNotification preconditions.
* User has added a notification.

#### Postconditions
* Successful - Notifications were changed
* Unsuccessful - No changes were made to notifications

#### Dialog
1. User is in notification settings
2. User requests to change notification
3. User specifies which stock notification to change
4. User specifies the price limit of when they wish to be notified
5. User requests to apply changes
   + If change cannot be made (0% change, etc), postcondition unsuccessful
6. System confirms user would like to make change
   + If user denies change, postcondition unsuccessful
7. System displays confirmation
8. Postcondition Successful

### UserRemovesNotification

#### Actors
* Users
* System

#### Description
* User removes a notification

#### Preconditions
* See UserAddNotification.
* User has added a notification

#### Postconditions
* Successful - Notifications was removed
* Unsuccessful - Notifications was not removed

#### Dialog
1. User requests to delete a notification
2. User specifies which stock notification they want to delete
3. User requests to apply changes
4. System confirms user would like to delete notification
   + If user aborts deletion, postcondition unsuccessful
5. System displays confirmation
6. Postcondition Successful 


### UserRecievesMessageForNotification

#### Actors
* System

#### Description
* System sends a message to the user informing them that a notification condition has been triggered

#### Preconditions
* Notification conditions have been added
* The notification conditions have been triggered

#### Postconditions
* Successful - Message was received
* Unsuccessful - Message was not received

#### Dialog
1. System sends a Message to user
2. System waits for push back notification of receival
   + If system does not receive notification receival, go to 1.
   + If system does not receive notifications 3 times, postconditions unsuccessful
3. System confirms receival, deletes notifcation
4. Postcondition Successful