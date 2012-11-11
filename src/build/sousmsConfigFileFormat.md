Information related to MySQL logins are stored within an xml file on the class server. By keeping this information out of the repository, a very simplistic amount of security is achieved. An actual production implementation would be more secure.

This file is located at "/var/git/sousmsConfig.xml" on the class server. It should be possible to pull necessary data when needed by scripts and programs. The "src/shared/dbutil.php" script will refer to this xml file when connecting to the database.

Root XML element is "data"

The MySQL database name is stored in "mysqlDatabase"
The MySQL user name is stored in "mysqlUser"
The MySQL password is stored in "mysqlPassword"
Jeff's login hash will be stored in "loginHash"