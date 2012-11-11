Information related to MySQL logins is stored within an xml file on the class server. By keeping this information out of the repository, a very simplistic amount of security is achieved. Actual production implementation would be far more secure. 

It should be possible for any running scripts/programs to pull any needed data from this xml file. For example, the "src/shared/dbutil.php" script will refer to this xml file when connecting to the database.

This xml file is located at "/var/git/sousmsConfig.xml"

Root xml element is "data"

The MySQL database name is stored in "mysqlDatabase"
The MySQL user name is stored in "mysqlUser"
The MySQL password is stored in "mysqlPassword"
Jeff's login hash will be stored in "loginHash"