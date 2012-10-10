### UserEnableNotificationsOnLogin

#### Actors
* Users

#### Description
User logs in to the SOUSMS for the first time using mobile and has not enabled notifications. User will be provided the option to enable notifications if they have not already been enabled.

#### Preconditions
* User has created an account
* User has not enabled notifications in settings
* User is logging in to Mobile SOUSMS App for the first time.

#### Postconditions
* Notifications Accepted - User informed of acceptance and ability to customize notification options in their settings, settings are changed, notification sent to user informing them they may change their settings any time in their mobile user settings in the non/mobile app(s).
* Notifications Denied - User informed of acceptance and told they can enable notifications any time in their mobile user settings in the non/mobile apps. No settings are changed.

#### Dialog
1. User opens SOUSMS Mobile Application
2. User is greeted with the login screen w/ option to create account.
3. User creates account/logs in to application (account creation on Mobile may not be available in final product due to security reasons with NASDAQ feed)
4. Popup informs user of option to enable notifications.
5. User accepts or denies notifications. 
6. If user accepts notifications, 'Notifcations Accepted' postconditions established, else 'Notifications Denied' postconditions established.