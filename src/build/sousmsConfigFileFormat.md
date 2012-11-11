Data related to mysql login is stored in an xml file on the server. Not really secure, but keeps the data out of the public repository. An actual production implementation would be more secure.

The file is located at "/var/git/sousmsConfig.xml"

Root XML element is "data"

mysql database name is in "mysqlDatabase"
mysql user name is in "mysqlUser"
mysql password is in "mysqlPassword"
Jeff's login hash will be in "loginHash"